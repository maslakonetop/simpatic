<!DOCTYPE html>
<html lang="en">
<head>
	<title>{{ $title }}</title>
	<link href="assets/img/icon/favicon.ico" rel="icon">
  	<link href="assets/img/icon/apple-icon-180x180.png" rel="apple-touch-icon">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="log/vendorbootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="log/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="log/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="log/vendoranimate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="log/vendorcss-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="log/vendoranimsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="log/vendorselect2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="log/vendordaterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="log/css/util.css">
	<link rel="stylesheet" type="text/css" href="log/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">		
		<div class="container-login100" style="background-image: url('log/images/kota-cilacap-bercahaya.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Login Simpatic
				</span>				
				<form class="login100-form validate-form p-b-33 p-t-5" action="/admin" method="POST">
					@csrf
					@if (session()->has('gagal'))
					<div class="alert alert-danger alert-dismissable fade show" role="alert">
						{{ session('gagal') }}
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
					</div>            
					@endif
					<div class="wrap-input100 validate-input" data-validate = "Enter username" >
						<input class="input100 @error('username') is-invalid @enderror" type="text" name="username" placeholder="User name" autofocus required value="{{ old('username') }}">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
						@error('username')
							<div class="invalid-feedback">
								{{ $message }}
							</div>
						@enderror
					</div> 

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password" required>
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn" type="submit">
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="log/vendorjquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="log/vendoranimsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="log/vendorbootstrap/js/popper.js"></script>
	<script src="log/vendorbootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="log/vendorselect2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="log/vendordaterangepicker/moment.min.js"></script>
	<script src="log/vendordaterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="log/vendorcountdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="log/js/main.js"></script>

</body>
</html>