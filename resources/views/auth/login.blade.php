<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
     <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet"  href="{{asset('css/bootstrap5.css')}}" />
    <title>Login | Debo Plant</title>
</head>
<body>
    <div class="contact-form col-10 col-sm-8 col-md-4 mx-auto">
		<h2>Admin</h2>
		
		<form method="POST" action="{{ route('login') }}">
                        @csrf
            
                                <div class="form-group">
                                     <label for="email" class="control-label text-light">{{ __('Email Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror text-dark" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                 <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password" class="control-label text-light">{{ __('Password') }}</label>

                            
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror text-dark" name="password" required autocomplete="current-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                             </span>
                                        @enderror
                                </div>
		                      <div class="">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label text-light" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                                  <button type="submit" class="btn btn-success w-100">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
		
		</form>
	</div>
</body>
<style>
body {
	margin: 0;
	padding: 0;
	font-family: 'Nunito', sans-serif;
}
body:before {
	content: '';
	position: fixed;
	width: 100vw;
	height: 100vh;
	background-image: url({{asset('seedling.jpg')}});
	background-position: center center;
	background-repeat: no-repeat;
	background-attachment: fixed;
	-webkit-background-size: cover;
	background-size: cover;
	-webkit-filter: blur(10px);
	-moz-filter: blur(10px);
	filter: blur(10px);
	transform:scale(1.1);
}
.contact-form {
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);

	height: 400px;
	padding: 40px 40px 80px;
	border-radius:25px;
	background: rgba(0, 0, 0, 0.5);
}

.contact-form h2 {
	margin: 0;
	padding: 0 0 10px;
	color: #42ba96;
	text-align: center;
	text-transform: uppercase;
}
.contact-form p {
	margin: 0;
	padding: 0;
	font-weight: bold;
	color: #fff;
}
.contact-form input {
	width: 100%;
	margin-bottom: 20px;
}
.contact-form input[type=email], .contact-form input[type=password] {
	border: none;
	border-bottom: 1px solid #fff;
	outline: none;
	height: 40px;
	color: #fff;
	font-size: 16px;
}

.contact-form a {
	color: #fff;
	font-size: 14px;
	font-weight: bold;
	text-decoration: none;
}
input[type=checkbox] {
	width: 5%;
}
</style>

