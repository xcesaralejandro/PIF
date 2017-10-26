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
          {{-- El modal está en partials, ya que al llamarlo desde el menú daba problema con el z-index --}}
          <a class="nav-link cursorPointer" data-toggle="modal" data-target="#loginModal">
            Iniciar sesión
          </a>
        </li>
        <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Registrarse</a></li>
      @else
        <li class="nav-item">
          <div class="dropup nav-item">
            <button class="dropdown-toggle dropup nav-link" type="button" id="about-us" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {{ Auth::user()->us_nombres }}
            </button>
            <div class="dropdown-menu" aria-labelledby="about-us">
              <a class="dropdown-item" href="{{ route('cuenta.index') }}">Mis datos personales</a>
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

      {{-- Fin menu loguin --}}
      @if(Auth::user()->us_tipo_usuario =='administrador' )
        <li class="nav-item">
          <a class=" nav-link" href="{{ route('agregarNutricionistas.index') }}">Nutricionistas</a>
        </li>
      </li>
      <li>
        <div class="dropup nav-item">
          <button class="dropdown-toggle dropup nav-link" type="button" id="about-us" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Zona informativa
          </button>
          <div class="dropdown-menu" aria-labelledby="about-us">
            <a class="dropdown-item" href="{{ route('enfermedades.index') }}">
              Enfermedades</a>
              <a class="dropdown-item" href="{{ route('etiquetanutricional.index') }}">
                Etiqueta nutricional</a>
                <a class="dropdown-item" href="{{ route('sellosnegros.index') }}">
                  Sellos negros</a>
                </div>
              </div>
            </li>
            <li>
              <div class="dropup nav-item">
                <button class="dropdown-toggle dropup nav-link" type="button" id="about-us" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Alimentos
                </button>
                <div class="dropdown-menu" aria-labelledby="about-us">
                  <a class="dropdown-item" href="{{ route('alimentos.index') }}">Alimento</a>
                  <a class="dropdown-item" href="{{ route('categoriasalimentarias.index') }}">Categoria</a>
                  <a class="dropdown-item" href="{{ route('gruposalimentarios.index') }}">Grupo</a>

                </div>
              </div>
              <li>
                <li>
                  <div class="dropup nav-item">
                    <button class="dropdown-toggle dropup nav-link" type="button" id="about-us" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Localizacion
                    </button>
                    <div class="dropdown-menu" aria-labelledby="about-us">
                      <a class="dropdown-item" href="{{ route('comunas.index') }}">
                        Comunas</a>
                        <a class="dropdown-item" href="{{ route('regiones.index') }}">
                          Regiones</a>
                        </div>
                      </div>
                    </li>

                    {{-- ITEMS DE MENÚ PARA EL NUTRICIONISTA --}}
                  @elseif(Auth::user()->us_tipo_usuario =='nutricionista' )
                    <li class="nav-item">
                      <a class="  nav-link" href="{{ route('factores.index') }}">Factores</a>
                    </li>
                    <li class="nav-item">
                      <a class="  nav-link" href="{{ route('comidas.index') }}">Comidas</a>
                    </li>

                    {{-- ITEMS DE MENÚ PARA EL CLIENTE --}}
                  @elseif(strtoupper(Auth::user()->us_tipo_usuario) === 'CLIENTE')
                    <li class="nav-item">
                      <a class="nav-link cursorPointer" href="{{route('cliente.inicio')}}">
                        Inicio
                      </a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link cursorPointer" href="{{route('nuevoAvance.index')}}">
                        Progreso
                      </a>
                    </li>

                    <li>
                      <div class="dropup nav-item">
                        <button class="dropdown-toggle dropup nav-link" type="button" id="about-us" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Plan alimentario
                        </button>
                        <div class="dropdown-menu" aria-labelledby="about-us">
                            <a class="dropdown-item" href="{{ route('planAlimentario.create') }}">
                              Crear nuevo plan
                            </a>
                            <a class="dropdown-item" href="{{ route('planesAlimentarios.Listar') }}">
                              Ver planes creados
                            </a>
                        </div>
                      </div>
                    </li>

                  @endif
                @endguest

              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Buscar persona">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
              </form>
            </div>
          </nav>
