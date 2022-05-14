<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="{{(asset('/'))}}/assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="ni ni-tv-2 text-primary"></i> {{ __('Dashboard') }}
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('categories') }}">
                    <i class="ni ni-planet text-blue"></i> {{ __('Categories') }}
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{ route('placescs') }}">
                    <i class="ni ni-pin-3 text-orange"></i> {{ __('Places') }}
                </a>
            </li>
            <hr class="my 3"/>
            <li class="nav-item">
                <a class="nav-link active" href="#navbar-examples" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                    <i class="fab fa-laravel" style="color: #f4645f;"></i>
                    <span class="nav-link-text" style="color: #f4645f;">{{ __('User management') }}</span>
                </a>

                <div class="collapse hide" id="navbar-examples">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('profile.edit') }}">
                                {{ __('User profile') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('user.index') }}">
                                {{ __('All users') }}
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link active" href="#navbar-frontend" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-frontend">
                    <i class="fab fa-laravel" style="color: #4437f8;"></i>
                    <span class="nav-link-text" style="color: #4437f8;">{{ __('Frontend Management') }}</span>
                </a>

                <div class="collapse hide" id="navbar-frontend">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('frontinfo') }}">
                                {{ __('Main infos') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('editHome') }}">
                                {{ __('Home page') }}
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

        </ul>
      </div>
    </div>
  </nav>
