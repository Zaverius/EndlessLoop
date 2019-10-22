<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EndlessLoop Admin - Login</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css')}}">
    <link href="{{ asset('css/admin/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/admin/sb-admin.css')}}" rel="stylesheet">
  </head>
  <body class="bg-dark">

    @if(isset(Auth::user()->email))
        <script>window.location='{{ url('admin') }}'</script>
    @endif

    <div class="container">
      <div class="card card-login mx-auto mt-5">
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif
      @if (isset($wrongCredentials))
        <div class="alert alert-danger">
            <ul>
                  <li>{{ $wrongCredentials }}</li>
            </ul>
        </div>
      @endif
        <div class="card-header">Login</div>
        <div class="card-body">
          <form method="post">
            @csrf
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Nombre Usuario" required="required" autofocus="autofocus">
                <label for="inputEmail">Usuario</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Contraseña" required="required">
                <label for="inputPassword">Contraseña</label>
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me" disabled>
                  Recordar contraseña
                </label>
              </div>
            </div>
            <input class="btn btn-primary btn-block" type="submit" value="Login">
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="#">Restaurar contraseña</a>
          </div>
        </div>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
