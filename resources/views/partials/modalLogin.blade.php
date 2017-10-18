<!-- Modal inicar sesion, está acá por el problema con el z-index -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel" style="margin: 0 auto !important;"><i class="fa fa-user" aria-hidden="true"></i> Iniciar sesión</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
          {{ csrf_field() }}
          <div class="form-group{{ $errors->has('us_email') ? ' has-error' : '' }}">
            <label for="email"><i class="fa fa-envelope" aria-hidden="true"></i> E-Mail</label>

            <div class="form-group">
              <input id="email" type="email" class="form-control" style="width: 100%;" name="us_email" value="{{ old('us_email') }}" required autofocus>

              @if ($errors->has('us_email'))
              <span class="help-block">
                <strong>{{ $errors->first('us_email') }}</strong>
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
 