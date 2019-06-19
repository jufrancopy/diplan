<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
  <div class="container-fluid">
    <!--<div class="navbar-wrapper">
      <a class="navbar-brand" href="#pablo">Panel de Control</a>
    </div>-->
    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
    <span class="sr-only">Toggle navigation</span>
    <span class="navbar-toggler-icon icon-bar"></span>
    <span class="navbar-toggler-icon icon-bar"></span>
    <span class="navbar-toggler-icon icon-bar"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end">
      <form class="navbar-form">
        <!--Inicio Boton Buscador
        <div class="input-group no-border">
          <input type="text" value="" class="form-control" placeholder="Buscar">
          <button type="submit" class="btn btn-white btn-round btn-just-icon">
          <i class="material-icons">search</i>
          <div class="ripple-container"></div>
          </button>
        </div>Fin Boton Buscador-->
      </form>
      <ul class="navbar-nav">
        <li class="nav-item">
          @guest
          <a class="nav-link" href="#pablo">
            <i class="material-icons">dashboard</i>
            <p class="d-lg-none d-md-block">
              Stats
            </p>
          </a>
          @else
        </li>
        <li class="nav-item dropdown">
          <!--<a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="material-icons">notifications</i>
            <span class="notification">1</span>
            <p class="d-lg-none d-md-block">
              Some Actions
            </p>
          </a>-->
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
            @endguest
            <a class="dropdown-item" href="#">Notificaciones</a>
          </div>
        </li>
        
        @if(Auth::user()->hasRole('admin'))
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true"><i class="fas fa-user"></i>
            {{ Auth::user()->name }}
          </a>
          <ul class="dropdown-menu">
            <li>
              <a href="{{route('administrador')}}">
                Ir a Administración
              </a>
            </li>
            <li>
              <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                Salir
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form>
            </li>
          </ul>
        </li>
        @else
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true"><i class="fas fa-user"></i>
            {{ Auth::user()->name }}
          </a>
          <ul class="dropdown-menu">
            <li>
              <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                Salir
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form>
            </li>
          </ul>
        </li>
      </ul>
      @endif
    </div>
  </div>
</nav>