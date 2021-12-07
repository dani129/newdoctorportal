<div class="row header-nav-col-row">
    <div class="col-sm-auto align-self-center">
      <a class="menuzord-brand site-brand" href="index-mp-layout1.html">
        <img class="logo-default logo-1x" src="{{asset('images/logo-wide.png')}}" alt="Logo">
        <img class="logo-default logo-2x retina" src="{{asset('images/logo-wide@2x.png')}}" alt="Logo">
      </a>
    </div>
    <div class="col-sm-auto ml-auto pr-0 align-self-center">
      <nav id="top-primary-nav" class="menuzord green" data-effect="slide" data-animation="none" data-align="right">
        <ul id="main-nav" class="menuzord-menu">
          <li class="active menu-item">
            <a href="#">Home</a>
          </li>
          <li class="menu-item">
            <a href="{{ url('about-us') }}">About Us</a>
          </li>
          <li class="menu-item"><a href="#">Doctors</a>
          </li>
          <li class="menu-item"><a href="#">News</a>
          </li>
          <li class="menu-item"><a href="javascript:void(0)">News</a>
          </li>
          <li class="menu-item"><a href="javascript:void(0)">Contact</a>
          </li>
          <li class="menu-item"><a href="{{ route('register') }}">{{__('Login') }}</a>
          </li>
          <li class="menu-item"><a href="{{ route('login') }}">{{ __('Register') }}</a>
          </li>
        </ul>
      </nav>
    </div>
</div>