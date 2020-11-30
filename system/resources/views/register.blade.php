<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
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
		@include('admin.utils.notif') 
		<div class="container-login100">
			<div class=" container wrap-login100">
					<form action="{{url('register')}}" class="login100-form validate-form" method="POST">
                        @csrf <span class="login100-form-title">
						Register
					</span>
					
					<div class="wrap-input100 ">
						<input class="input100 form-control" type="text" name="nama" placeholder="nama pengguna">
					</div>
					<div class="wrap-input100 ">
						<input class="input100 form-control" type="email" name="email" placeholder="goza123@gmail.com">
					</div>
					<div class="wrap-input100 ">
						<input class="input100 form-control" type="password" name="password" placeholder="Password">
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div> 
					<div class="container-login100-form-btn">
						<button class="login100-form-btn"> 
							Registrasi
						</button> 
					</div>  
					<div class="text-center p-t-10">
						<p class="message">Sudah Memiliki Akun? <a href="{{url("/Login")}}">Login</a></p>
					</div>
				</form>
			</div>
		</div>
	</div>

</body>
</html>