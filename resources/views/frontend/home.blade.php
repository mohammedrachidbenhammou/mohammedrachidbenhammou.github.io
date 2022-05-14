
@include('frontend.shared.master', ['prefs' => ['Home',0,$info]])

@php
    use App\Models\Media;
    use App\Models\City;

@endphp
      <!-- Swiper-->
      @if ($info->caroussel_show == 1)

      <section class="section swiper-container swiper-slider swiper-slider-corporate swiper-pagination-style-2" data-loop="true" data-autoplay="5000" data-simulate-touch="true" data-nav="false" data-direction="vertical">

        <div class="swiper-wrapper text-left">
          
          <div class="swiper-slide context-dark" data-slide-bg="storage/{{$medias[2]->uri}}">
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <div class="row">
                  <div class="col-md-10">
                    <h6 class="text-uppercase" data-caption-animate="fadeInRight" data-caption-delay="0"></h6>
                    <h2 class="oh font-weight-light" data-caption-animate="slideInUp" data-caption-delay="100"><span>{{$info->slide_1}}</span></h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide context-dark" data-slide-bg="storage/{{$medias[0]->uri}}">
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <div class="row">
                  <div class="col-md-10">
                    <h6 class="text-uppercase" data-caption-animate="fadeInRight" data-caption-delay="0"></h6>
                    <h2 class="oh font-weight-light" data-caption-animate="slideInUp" data-caption-delay="100"><span>{{$info->slide_2}}</span></h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide context-dark" data-slide-bg="storage/{{$medias[1]->uri}}">
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <div class="row">
                  <div class="col-md-10">
                    <h6 class="text-uppercase" data-caption-animate="fadeInRight" data-caption-delay="0"></h6>
                    <h2 class="oh font-weight-light" data-caption-animate="slideInUp" data-caption-delay="100"><span>{{$info->slide_3}}</span></h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Swiper Pagination-->
        <div class="swiper-pagination"></div>
      </section>
      
      @endif
      <!-- Section Box Categories-->
      <section class="section section-lg section-top-1 bg-gray-4 mt-5">
        <div class="container offset-negative-1">
          <div class="box-categories cta-box-wrap">
            <div class="box-categories-content">
              <div class="row justify-content-center">
                <div class="col-md-4 wow fadeInDown col-9" data-wow-delay=".2s">
                  <ul class="list-marked-2 box-categories-list">
                    <li><a href="/view/{{$posts[0]->id}}"><img src="
                    @php
                      $med = Media::find($posts[0]->thumbnail_id);
                     // echo $med->uri;
                      $boom=  Thumbnail::src(public_path("\\storage\\".$med->uri))->smartcrop(368, 420)->url();         
                   
                        echo $boom;
                      @endphp
                      " alt="" width="368" height="420"/></a>
                      <h5 class="box-categories-title">{{$posts[0]->name}}
                        <br>
                        @php
                        $city = City::find($posts[0]->id_city);
                        echo "<font size='3'>- ".$city->Name.' -</font>';
                        @endphp   </h5>
                    </li>
                  </ul>
                </div>
                <div class="col-md-4 wow fadeInDown col-9" data-wow-delay=".2s">
                  <ul class="list-marked-2 box-categories-list">
                    <li><a href="/view/{{$posts[1]->id}}"><img src=" @php
                      $med = Media::find($posts[1]->thumbnail_id);
                     // echo $med->uri;
                      $boom=  Thumbnail::src(public_path("\\storage\\".$med->uri))->smartcrop(368, 420)->url();         
                      echo $boom;
                      @endphp" alt="" width="368" height="420"/></a>
                      <h5 class="box-categories-title">{{$posts[1]->name}}
                        <br>
                        @php
                        $city = City::find($posts[1]->id_city);
                        echo "<font size='3'>- ".$city->Name.' -</font>';
                        @endphp   </h5>
                    </li>
                  </ul>
                </div>
                <div class="col-md-4 wow fadeInDown col-9" data-wow-delay=".2s">
                  <ul class="list-marked-2 box-categories-list">
                    <li><a href="/view/{{$posts[2]->id}}"><img src=" @php
                      $med = Media::find($posts[2]->thumbnail_id);
                     // echo $med->uri;
                      $boom=  Thumbnail::src(public_path("\\storage\\".$med->uri))->smartcrop(368, 420)->url();         
                         echo $boom;
                      @endphp" alt="" width="368" height="420"/></a>
                      <h5 class="box-categories-title">{{$posts[2]->name}}
                      <br>
                      @php
                      $city = City::find($posts[2]->id_city);
                      echo "<font size='3'>- ".$city->Name.' -</font>';
                      @endphp   
                    </h5>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div><a class="link-classic wow fadeInUp" href="../discover">Other place<span></span></a>
          <!-- Owl Carousel-->
        </div>
      </section>
      <!-- Discover New Horizons-->
      <!--	Our Services-->
      <section class="section section-sm">
        <div class="container">
          <h3>Need assistance on your trip ? </h3>
          <div class="row row-30">
            <div class="col-sm-6 col-lg-4">
              <article class="box-icon-classic">
                <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                  <div class="unit-left">
                    <div class="box-icon-classic-icon fl-bigmug-line-equalization3"></div>
                  </div>
                  <div class="unit-body">
                    <h5 class="box-icon-classic-title"><a href="#">Personalized Matching</a></h5>
                    <p class="box-icon-classic-text">Our unique matching system lets you find just the tour you want for your next holiday.</p>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4">
              <article class="box-icon-classic">
                <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                  <div class="unit-left">
                    <div class="box-icon-classic-icon fl-bigmug-line-circular220"></div>
                  </div>
                  <div class="unit-body">
                    <h5 class="box-icon-classic-title"><a href="#">Wide Variety of Tours</a></h5>
                    <p class="box-icon-classic-text">We offer a wide variety of personally picked tours with destinations all over the globe.</p>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4">
              <article class="box-icon-classic">
                <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                  <div class="unit-left">
                    <div class="box-icon-classic-icon fl-bigmug-line-hot67"></div>
                  </div>
                  <div class="unit-body">
                    <h5 class="box-icon-classic-title"><a href="#">Handpicked Hotels</a></h5>
                    <p class="box-icon-classic-text">Our team offers only the best selection of affordable and luxury hotels to our clients.</p>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-4">
              <article class="box-icon-classic">
                <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                  <div class="unit-left">
                    <div class="box-icon-classic-icon fa-thumbs-o-up"></div>
                  </div>
                  <div class="unit-body">
                    <h5 class="box-icon-classic-title"><a href="#">Best Restaurant for your taste</a></h5>
                    <p class="box-icon-classic-text">Our selection of restaurant for every taste and for the best price.</p>
                  </div>
                </div>
              </article>
            </div>
            
            <div class="col-sm-6 col-lg-4">
              <article class="box-icon-classic">
                <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                  <div class="unit-left">
                    <div class="box-icon-classic-icon fa-solid fa-mobile"></div>
                  </div>
                  <div class="unit-body">
                    <h5 class="box-icon-classic-title"><a href="#">Intuitive and easy to use</a></h5>
                    <p class="box-icon-classic-text">Programmed with the ease of use in mind that facilitate your interaction with the application.</p>
                  </div>
                </div>
              </article>
            </div>

            <div class="col-sm-6 col-lg-4">
              <article class="box-icon-classic">
                <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                  <div class="unit-left">
                    <div class="box-icon-classic-icon fa-solid fa-heart-o"></div>
                  </div>
                  <div class="unit-body">
                    <h5 class="box-icon-classic-title"><a href="#">And more ...</a></h5>
                    <p class="box-icon-classic-text">Let the application take care of your needs in your vacation.</p>
                  </div>
                </div>
              </article>
            </div>

          </div>
        </div>
      </section>
      <!-- Different People-->
      <section class="section section-sm">
        <div class="container">
          <h3 class="title-block find-car oh"><span class="d-inline-block wow slideInUp">Tourist guides at your disposition</span></h3>
          <div class="row row-30 justify-content-center box-ordered">
            <div class="col-sm-6 col-md-5 col-lg-3">
              <!-- Team Modern-->
              <article class="team-modern">
                <div class="team-modern-header"><a class="team-modern-figure" href="#"><img class="img-circles" src="images/user-1-118x118.jpg" alt="" width="118" height="118"/></a>
                  <svg x="0px" y="0px" width="270px" height="70px" viewbox="0 0 270 70" enable-background="new 0 0 270 70" xml:space="preserve">
                    <g>
                      <path fill="#161616" d="M202.085,0C193.477,28.912,166.708,50,135,50S76.523,28.912,67.915,0H0v70h270V0H202.085z"></path>
                    </g>
                  </svg>
                </div>
                <div class="team-modern-caption">
                  <h6 class="team-modern-name"><a href="#">Guide name</a></h6>
                  <p class="team-modern-status">City of the guide</p>
                  <h6 class="team-modern-phone"><a href="tel:#">Telephone</a></h6>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-3">
              <!-- Team Modern-->
              <article class="team-modern">
                <div class="team-modern-header"><a class="team-modern-figure" href="#"><img class="img-circles" src="images/user-2-118x118.jpg" alt="" width="118" height="118"/></a>
                  <svg x="0px" y="0px" width="270px" height="70px" viewbox="0 0 270 70" enable-background="new 0 0 270 70" xml:space="preserve">
                    <g>
                      <path fill="#161616" d="M202.085,0C193.477,28.912,166.708,50,135,50S76.523,28.912,67.915,0H0v70h270V0H202.085z"></path>
                    </g>
                  </svg>
                </div>
                <div class="team-modern-caption">
                  <h6 class="team-modern-name"><a href="#">Peter McMillan</a></h6>
                  <p class="team-modern-status">Travel Agent</p>
                  <h6 class="team-modern-phone"><a href="tel:#">+1 323-913-4688</a></h6>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-3">
              <!-- Team Modern-->
              <article class="team-modern">
                <div class="team-modern-header"><a class="team-modern-figure" href="#"><img class="img-circles" src="images/user-3-118x118.jpg" alt="" width="118" height="118"/></a>
                  <svg x="0px" y="0px" width="270px" height="70px" viewbox="0 0 270 70" enable-background="new 0 0 270 70" xml:space="preserve">
                    <g>
                      <path fill="#161616" d="M202.085,0C193.477,28.912,166.708,50,135,50S76.523,28.912,67.915,0H0v70h270V0H202.085z"></path>
                    </g>
                  </svg>
                </div>
                <div class="team-modern-caption">
                  <h6 class="team-modern-name"><a href="#">Jill Peterson</a></h6>
                  <p class="team-modern-status">Tour Consultant</p>
                  <h6 class="team-modern-phone"><a href="tel:#">+1 323-913-4688</a></h6>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-3">
              <!-- Team Modern-->
              <article class="team-modern">
                <div class="team-modern-header"><a class="team-modern-figure" href="#"><img class="img-circles" src="images/user-4-118x118.jpg" alt="" width="118" height="118"/></a>
                  <svg x="0px" y="0px" width="270px" height="70px" viewbox="0 0 270 70" enable-background="new 0 0 270 70" xml:space="preserve">
                    <g>
                      <path fill="#161616" d="M202.085,0C193.477,28.912,166.708,50,135,50S76.523,28.912,67.915,0H0v70h270V0H202.085z"></path>
                    </g>
                  </svg>
                </div>
                <div class="team-modern-caption">
                  <h6 class="team-modern-name"><a href="#">James Smith</a></h6>
                  <p class="team-modern-status">PR Manager</p>
                  <h6 class="team-modern-phone"><a href="tel:#">+1 323-913-4688</a></h6>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>
      <!-- Section Subscribe-->
      <section class="section bg-default text-center offset-top-50">
        <div class="parallax-container" data-parallax-img="storage/{{$medias[rand(0,count($medias)-1)]->uri}}">
          <div class="parallax-content section-xl section-inset-custom-1 context-dark bg-overlay-2-21">
            <div class="container">
              <h2 class="heading-2 oh font-weight-normal wow slideInDown"><span class="d-block font-weight-semi-bold">Discover the many tourist places</span><span class="d-block font-weight-light">that we offer you to visit</span></h2>
            </div>
          </div>
        </div>
      </section>
      <!--	Instagrram wondertour-->
      <section class="section section-sm section-top-0 section-fluid section-relative bg-gray-4">
        <div class="container-fluid">
          <h6 class="gallery-title"></h6>
          <!-- Owl Carousel-->
          <div class="owl-carousel owl-classic owl-dots-secondary" data-items="1" data-sm-items="2" data-md-items="3" data-lg-items="4" data-xl-items="5" data-xxl-items="6" data-stage-padding="15" data-xxl-stage-padding="0" data-margin="30" data-autoplay="true" data-nav="true" data-dots="true">
            <!-- Thumbnail Classic-->
            <article class="thumbnail thumbnail-mary">
              <div class="thumbnail-mary-figure"><img src="storage/{{$medias[rand(0,count($medias)-1)]->uri}}" alt="" width="270" height="195"/>
              </div>
              <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/gallery-image-1-1200x800-original.jpg" data-lightgallery="item"><img src="images/gallery-image-1-270x195.jpg" alt="" width="270" height="195"/></a>
              </div>
            </article>
            <!-- Thumbnail Classic-->
            <article class="thumbnail thumbnail-mary">
              <div class="thumbnail-mary-figure"><img src="storage/{{$medias[rand(0,count($medias)-1)]->uri}}" alt="" width="270" height="195"/>
              </div>
              <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/gallery-image-2-1200x800-original.jpg" data-lightgallery="item"><img src="images/gallery-image-2-270x195.jpg" alt="" width="270" height="195"/></a>
              </div>
            </article>
            <!-- Thumbnail Classic-->
            <article class="thumbnail thumbnail-mary">
              <div class="thumbnail-mary-figure"><img src="storage/{{$medias[rand(0,count($medias)-1)]->uri}}" alt="" width="270" height="195"/>
              </div>
              <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/gallery-image-3-1200x800-original.jpg" data-lightgallery="item"><img src="images/gallery-image-3-270x195.jpg" alt="" width="270" height="195"/></a>
              </div>
            </article>
            <!-- Thumbnail Classic-->
            <article class="thumbnail thumbnail-mary">
              <div class="thumbnail-mary-figure"><img src="storage/{{$medias[rand(0,count($medias)-1)]->uri}}" alt="" width="270" height="195"/>
              </div>
              <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="storage/{{$medias[rand(0,count($medias)-1)]->uri}}" data-lightgallery="item"><img src="images/gallery-image-4-270x195.jpg" alt="" width="270" height="195"/></a>
              </div>
            </article>
            <!-- Thumbnail Classic-->
            <article class="thumbnail thumbnail-mary">
              <div class="thumbnail-mary-figure"><img src="storage/{{$medias[rand(0,count($medias)-1)]->uri}}" alt="" width="270" height="195"/>
              </div>
              <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/gallery-image-5-1200x800-original.jpg" data-lightgallery="item"><img src="images/gallery-image-5-270x195.jpg" alt="" width="270" height="195"/></a>
              </div>
            </article>
            <!-- Thumbnail Classic-->
            <article class="thumbnail thumbnail-mary">
              <div class="thumbnail-mary-figure"><img src="storage/{{$medias[rand(0,count($medias)-1)]->uri}}" alt="" width="270" height="195"/>
              </div>
              <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/gallery-image-6-1200x800-original.jpg" data-lightgallery="item"><img src="images/gallery-image-6-270x195.jpg" alt="" width="270" height="195"/></a>
              </div>
            </article>
            <!-- Thumbnail Classic-->
            <article class="thumbnail thumbnail-mary">
              <div class="thumbnail-mary-figure"><img src="storage/{{$medias[rand(0,count($medias)-1)]->uri}}" alt="" width="270" height="195"/>
              </div>
              <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/gallery-image-7-1200x800-original.jpg" data-lightgallery="item"><img src="images/gallery-image-7-270x195.jpg" alt="" width="270" height="195"/></a>
              </div>
            </article>
          </div>
        </div>
      </section>
      @include('frontend.shared.footer')