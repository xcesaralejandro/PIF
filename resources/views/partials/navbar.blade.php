<nav class="navbar fixed-bottom navbar-toggleable-lg navbar-light bg-faded darkPalet resetNavbarPadding">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class=""><i class="fa fa-bars iconMenu" aria-hidden="true"></i></span>
  </button>
  <a class="navbar-brand"> <img src="{{ asset('images/logo_frust.svg') }}" width="30px" height="30px"> Frust</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-md-0">
      <li class="nav-item">
        <div class="dropup nav-item">
          <button class="dropdown-toggle dropup nav-link" type="button" id="about-us" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Usuario apellido
          </button>
            <div class="dropdown-menu" aria-labelledby="about-us">
              <a class="dropdown-item" href="#">Menú 1</a>
              <a class="dropdown-item" href="#">Menú 2</a>
              <a class="dropdown-item" href="#">Menú 3</a>
            </div>
          </div>
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