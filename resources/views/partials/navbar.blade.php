<nav class="navbar fixed-bottom navbar-toggleable-lg navbar-light bg-faded darkPalet resetNavbarPadding">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class=""><i class="fa fa-bars iconMenu" aria-hidden="true"></i></span>
  </button>
  <a class="navbar-brand"> <img src="{{ asset('images/logo_frust.svg') }}" width="30px" height="30px"> Frust</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-md-0">
      {{-- Loguin --}}
      @guest
      <li class="nav-item">
        <!-- Trigger modal iniciar sesion -->
        <a class="nav-link cursorPointer" data-toggle="modal" data-target="#loginModal">
          Iniciar sesión
        </a>
        <!-- Modal inicar sesion -->
        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-user" aria-hidden="true"></i> Iniciar sesión</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                
                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                  {{ csrf_field() }}

                  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email"><i class="fa fa-envelope" aria-hidden="true"></i> E-Mail</label>

                    <div class="form-group">
                      <input id="email" type="email" class="form-control" style="width: 100%;" name="email" value="{{ old('email') }}" required autofocus>

                      @if ($errors->has('email'))
                      <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                      </span>
                      @endif
                    </div>
                  </div>

                  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Contraseña</label>

                    <div class="form-group">
                      <input id="password" type="password" class="form-control" name="password" required>

                      @if ($errors->has('password'))
                      <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                      </span>
                      @endif
                    </div>
                  </div>

                  <div class="form-group">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordarme
                        </label>
                      </div>
                  </div>

                  <div class="form-group text-center">
                      <a class="btn btn-link" href="{{ route('password.request') }}">
                        ¿Olvidaste la contraseña?
                      </a>
                  </div>
                
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Ingresar</button>
              </div>
              </form>

            </div>
          </div>
        </div>
      </li>
      <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Registrarse</a></li>
      @else
      <li class="nav-item">
        <div class="dropup nav-item">
          <button class="dropdown-toggle dropup nav-link" type="button" id="about-us" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ Auth::user()->name }}
          </button>
          <div class="dropdown-menu" aria-labelledby="about-us">
            <a class="dropdown-item" href="#">Mis datos personales</a>
            <a class="divider"></a>
            <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            Cerrar sesión
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
          </form>
        </div>
      </div>
    </li>
    @endguest
    {{-- Fin menu loguin --}}

    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
  </ul>
  <form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="text" placeholder="Buscar persona">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
  </form>
</div>
</nav>