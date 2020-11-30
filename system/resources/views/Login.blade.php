<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<link rel="stylesheet" href="{{url('public')}}/assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('public')}}/assets/vendor/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('public')}}/assets/css/main.css">
<!--===============================================================================================-->
</head>
<body> 
	<div class="limiter">
		<div class="container-login100">
			<div class=" container wrap-login100">
				@include('admin.utils.notif')
				<form action="{{url('Login')}}" class="login100-form validate-form" method="POST">
					<span class="login100-form-title">
						 Login
					</span>
					@csrf
					<div class="wrap-input100 ">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 ">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div> 
					<div class="container-login100-form-btn">
						<button class="login100-form-btn"> 
							Login
						</button>  
					<div class="text-center p-t-10">
						<p class="message">belum Memiliki Akun? <a href="{{url("/register")}}">registrasi</a></p>
					</div>
					</div>  
				</form>
			</div>
		</div>
	</div>
</body>
</html>