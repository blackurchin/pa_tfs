
<header id="header"@if(Route::current()->getName() != 'home') class="header-fixed"@endif>
  <div class="container">

    <div id="logo" class="pull-left">
      <h1>
        <a href="{{ route('home') }}#intro">
          @include('sections.logo')
         {{ trans('panel.site_title') }}
        </a>
      </h1>
    </div>
    <nav id="nav-menu-container">
      <ul class="nav-menu">
        <li class="menu-active"><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#intro">Home</a></li>
        <li><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#about">About</a></li>
        @if(Auth::check())
        <li><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#speakers">Speakers</a></li>
        <li><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#schedule">Schedule</a></li>
        <li><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#venue">Venue</a></li>
        <li><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#gallery">Gallery</a></li>
        <li><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#supporters">Host Country</a></li>
        <li><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#faq">F.A.Q</a></li>
        <li><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#contact">Contact</a></li>
          @endif
          @if(!Auth::check())
          <li class="buy-tickets"><a href="{{ route('login') }}">Login</a></li>
          @else
            @if(Auth::user()->hasAnyRole(['admin','encoder']))
            <li class="buy-tickets"><a href="{{ route("admin.home") }}">Register</a></li>
             @else
            @can('profile_access')
            <li class="buy-tickets"><a href="{{route('admin.profiles.index') }}">Profile</a></li>
            @endcan
            @endif
          @endif
      </ul>
    </nav>
  </div>
</header>
