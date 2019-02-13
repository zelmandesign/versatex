<header class="banner navbar navbar-expand-md fixed-top">
  <div class="container">
    <a class="brand" href="{{ home_url('/') }}"><div class="d-block d-md-none">Versatex</div></a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <i class="fas fa-bars"></i>
    </button>
    <nav class="nav-primary navbar-collapse collapse justify-content-end" id="navbarCollapse">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav']) !!}
      @endif
    </nav>
  </div>
</header>

<div class="splash">
  <img src="@asset('images/versatex_Logo_white.png')" class="element-animation">

  <div class="skip-splash">SKIP</div>
</div>
