@include('frontend.shared.master', ['prefs' => ['Discover',1,$info]])

      <!-- Why choose us-->
      <section class="section section-sm section-first bg-default text-md-left">
        <div class="container">
          <div class="row row-50 justify-content-center align-items-xl-center">
            <div class="col-md-10 col-lg-5 col-xl-6"><img src="@php
                  use App\Models\Media;

               $med = Media::find($place->thumbnail_id);
                     // echo $med->uri;
                      $boom=  Thumbnail::src(public_path("\\storage\\".$med->uri))->smartcrop(520, 564)->url();         
                        $rPart=substr($boom,strpos($boom,"storage",0) ); // bcdef
                        $lPart=substr($boom,0,strpos($boom,"storage",0)-1 );
                        $fullThumnail=$lPart.$rPart;
                        echo $fullThumnail;
                      @endphp" alt="" width="519" height="564"/>
            </div>
            <div class="col-md-10 col-lg-7 col-xl-6">
              <h1 class="text-spacing-25 font-weight-normal title-opacity-9" style="color: gray">{{$place->name}}</h1>
              <!-- Bootstrap tabs-->
              <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-4">
                <!-- Nav tabs-->
                <ul class="nav nav-tabs">
                  <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-4-1" data-toggle="tab">Informations</a></li>
                </ul>
                <!-- Tab panes-->
                <div class="tab-content">
                  <div class="tab-pane fade show active" id="tabs-4-1">
                    <p>
                    {{$place->description}}
                    </p>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Latest Projects-->
      <section class="section section-sm section-fluid bg-default">
        <div class="container">
          <h3>Gallery</h3>
        </div>
        <!-- Owl Carousel-->
        <div class="owl-carousel owl-classic owl-timeline" data-items="1" data-md-items="2" data-lg-items="3" data-xl-items="4" data-margin="30" data-autoplay="false" data-nav="true" data-dots="true">
  @php
   $galleryitems=Media::all()->where('id_post',$place->id)->where('mime_type',"image/jpeg");   
  @endphp
  @foreach ($galleryitems as $item)
 <!-- Thumbnail Classic start-->
  <div class="owl-item">
    <article class="thumbnail thumbnail-mary">
      <div class="thumbnail-mary-figure"><img src="{{asset('storage/'.$item->uri)}}" alt="" width="420" height="308"/>
      </div>
      <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="{{asset('images/gallery-image-11-1200x800-original.jpg')}}"
         data-lightgallery="item"><img src="{{asset('images/gallery-image-11-420x308.jpg')}}" alt="" width="420" height="308"/></a>
      </div>
    </article>
    <div class="thumbnail-mary-description">
      <h5 class="thumbnail-mary-project"><a href="#">{{$item->title}}</a></h5><span class="thumbnail-mary-decor"></span>
      <h5 class="thumbnail-mary-time">
      </h5>
    </div>
  </div>
    <!-- Thumbnail Classic end-->


  @endforeach
      </section>
      <!-- What people Say-->
      <!-- Counter Classic-->
      <section class="section section-fluid bg-default">
        <div class="parallax-container" data-parallax-img="images/bg-counter-2.jpg">
          <div class="parallax-content section-xl context-dark bg-overlay-26">
            <div class="container">
              <div class="row row-50 justify-content-center border-classic">
                <div class="col-sm-6 col-md-5 col-lg-3">
                  <div class="counter-classic">
                    <div class="counter-classic-number"><span class="counter">12</span>
                    </div>
                    <h5 class="counter-classic-title">Visits</h5>
                  </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-3">
                  <div class="counter-classic">
                    <div class="counter-classic-number"><span class="counter">194</span>
                    </div>
                    <h5 class="counter-classic-title">Search</h5>
                  </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-3">
                  <div class="counter-classic">
                    <div class="counter-classic-number"><span class="counter">2</span><span class="symbol">k</span>
                    </div>
                    <h5 class="counter-classic-title">Like it</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      @include('frontend.shared.footer')
