
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
     <script src="https://kit.fontawesome.com/2f4b5409be.js" crossorigin="anonymous"></script>
    <title>Login | Debo Plant</title>
</head>
<body>
    <div class="contact-form col-10 col-sm-8 col-md-4 mx-auto">
		<h2><i class="fa fa-sign-in" style="font-size:60px; padding-bottom:40px;"></i></h2>
		
	<form method="POST" action="/log" enctype="multipart/form-data">
                        @csrf
            
                                <div class="form-group">
                                     <p class="control-label text-light">phone number</p>
                                <input id="phone" type="tel" class="form-control text-dark" name="phone" pattern=[0-9]{10}  oninvalid="setCustomValidity('ስልክ ቁጥር ብቻ ያስገቡ ለምሳሌ , 0912345678')" oninput="setCustomValidity('')" required autocomplete="email" autofocus placeholder="ስልክ ቁጥር ያስገቡ"  >

                             
                                </div>
                              
                             
                                  <button type="submit" class="btn btn-sm btn-success" style="margin-left:10%;width:80%;">
                                    ግባ
                                </button>
                                <br> <br>
                                <a href="/reg" class="text-primary">መለያ የለዎትም?</a>

		
		</form>
	</div>
	<a href="/" class="btn btn-lg btn-success" id="fixedbutton">shop <i class="fa fa-arrow-right"></i></a>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

@if (session('status'))
<script>
  swal("{{ session('status') }}");
</script>
    
 
 @endif
</body>
<style>

#fixedbutton {
    position: fixed;
    bottom: 10%;
    right: 10%; 
}
input:invalid{
    border-color:red;
}
input,input:valid{
    border-color:#ccc;
}
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
    transform: scale(1.1);
}
.contact-form {
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);

	height: 350px;
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
	
	padding-left:10%;
	color: #fff;
}
.contact-form input {
	width: 80%;
	margin:auto;
	margin-bottom: 20px;
}
.contact-form input[type=email], .contact-form input[type=password] {
	border: none;
	border-bottom: 1px solid #fff;
	background: transparent;
	outline: none;
	height: 40px;
	color: #fff;
	font-size: 16px;
}

.contact-form a {
    padding-left:10%;
    padding-top:5%;
	font-size: 14px;
	font-weight: bold;
	text-decoration: underline;
}

</style>

