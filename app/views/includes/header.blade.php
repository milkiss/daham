<div class="navbar navbar-default navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="true" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="/{{ $lang }}" class="">
        <img class="brand-image" src="/dahamlogo.png" />
      </a>
    </div>
    <div id="navbar" class="navbar-collapse collapse in" aria-expanded="true">
      <ul class="nav navbar-nav">
        <!--
        <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">members<span class="caret"></span></a>
          <ul role="menu" class="dropdown-menu">
            <li><a href="/members/kyeounsoo">Kyeounsoo Kim</a></li>
          </ul>
        </li>
        -->
        <li><a href="/{{ $lang }}/members/kyeounsoo">{{ Lang::get("menu.manpower") }}</a></li>
        <li><a href="/{{ $lang }}/service-areas">{{ Lang::get("menu.service-areas") }}</a></li>
        <li><a href="/{{ $lang }}/professionalism">{{ Lang::get("menu.prof") }}</a></li>
        <li><a href="/{{ $lang }}/locations">{{ Lang::get("menu.locations") }}</a></li>
        <!-- <li><a href="/{{ $lang }}/links">{{ Lang::get("menu.links") }}</a></li> -->
      </ul>
     <a class="alert-link black pull-right" href="{{ L18n::currentUrl($clang) }}">{{ $clangname }}</a>
    </div>
  </div>
</div>