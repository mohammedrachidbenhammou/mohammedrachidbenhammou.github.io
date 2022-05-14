
<div class="rd-navbar-main-outer">
    <div class="rd-navbar-main">
      <div class="rd-navbar-nav-wrap">
        <ul class="list-inline list-inline-md rd-navbar-corporate-list-social">
      @if ($page[1]->fb_link!=null)  
          <li><a class="icon fa fa-facebook" href="{{$prefs->fb_link}}"></a></li>
        @endif
      @if ($page[1]->twit_link!=null)  
          
          <li><a class="icon fa fa-twitter" href="{{$prefs->twit_link}}"></a></li>
          @endif
      @if ($page[1]->insta_link!=null)  
          
          <li><a class="icon fa fa-instagram" href="{{$prefs->insta_link}}"></a></li>
          @endif
        
        </ul>
        <!-- RD Navbar Nav-->
        <ul class="rd-navbar-nav">
          <li class="rd-nav-item @if ($page[0] ==0) active @endif"><a class="rd-nav-link" href="{{route('frontHome')}}">Home</a>
          </li>
          <li class="rd-nav-item @if ($page[0] ==1) active @endif"><a class="rd-nav-link" href="{{route('frontDiscover')}}">Discover</a>
          </li>
          <li class="rd-nav-item @if ($page[0] ==2) active @endif"><a class="rd-nav-link" href="{{route('frontContact')}}">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
  </div>