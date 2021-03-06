<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
        <!-- Fontawesome -->
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>App Warga</title>
    </head>
    <body>
        <section class="material-half-bg">
            <div class="cover"></div>
        </section>
        <section class="login-content">
            <div class="logo">
                <h1>App Warga</h1>
            </div>
            <div class="login-box">
            
                <form class="login-form" action="{{ route('login') }}" method="POST">
                    @csrf
                    <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>

                    @if(session('error'))
                  <div class="alert alert-danger">
                      {{session('error')}}
                  </div>
                  @endif
                    <div class="form-group">
                        <label class="control-label">Nama</label>
                        <input id="name" type="text"
                    class="form-control form-control-user{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
                    value="{{ old('name') }}" placeholder="Masukan nama" required autofocus>
                    @if ($errors->has('name'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif
                    </div>
                    <div class="form-group">
                        <label class="control-label">Kata Sandi</label>
                        <input id="password" type="password"
                    class="form-control form-control-user{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Masukan kata sandi"
                    required>
                    @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif                    
                    </div>
                    <div class="form-group btn-container">
                        <button class="btn btn-primary btn-block" type="submit"><i class="fa fa-sign-in fa-lg fa-fw"></i>MASUK</button>
                    </div>
                </form>
            </div>
        </section>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    </body>
</html>