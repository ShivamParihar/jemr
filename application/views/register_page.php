<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V4</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../../assets/images/icons/favicon.ico">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../assets/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../assets/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../../assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../assets/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../../assets/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="../../assets/css/main.css">
<!--===============================================================================================-->
<style>
		.login100-form-bgbtn {
   			 background: #0066FF;
    	}
    	.alert {
		    margin-bottom: 0;
		}
	</style>
</head>
<body>
	
	<div class="limiter">
		<?php if( $info = $this->session->flashdata('info')){
		    echo '<div class="alert alert-danger alert-dismissible">
		  				<strong>'.$info.'</strong>
		  				<button type="button" class="close" data-dismiss="alert">&times;</button>
			      </div>';
			  }

		?>
		<div class="container-login100" style="background-image: url('../../assets/images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<?php echo form_open('LoginController/register_check',['class'=>'login100-form validate-form']); ?>
					<span class="login100-form-title p-b-49">
						Register
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "name is required">
						<span class="label-input100">Name*</span>
						<input class="input100" type="text" name="name" placeholder="Type your name">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Email is required">
						<span class="label-input100">Email*</span>
						<input class="input100" type="email" name="email" placeholder="Type your email">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<!-- <div class="wrap-input100 validate-input m-b-23" data-validate = "Address is required">
						<span class="label-input100">Address*</span>
						<input class="input100" type="text" name="user_adrress" placeholder="Type your address">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>
 -->
					<div class="wrap-input100 validate-input m-b-23" data-validate = "password is required">
						<span class="label-input100">Password*</span>
						<input class="input100" type="password" name="password" placeholder="Type your password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>

					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Confirm Password*</span>
						<input class="input100" type="password" name="c_password" placeholder="Confirm your password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div><br/>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Register
							</button>
						</div>
					</div>

					<div class="txt1 text-center p-t-10 p-b-10">
						<span>
							Already a user<br/>
							<a href="../LoginController" style="color:#0080ff">Sign in</a>
						</span>						
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="../../assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../../assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../../assets/vendor/bootstrap/js/popper.js"></script>
	<script src="../../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../../assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../../assets/vendor/daterangepicker/moment.min.js"></script>
	<script src="../../assets/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../../assets/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="../../assets/js/main.js"></script>

</body>
</html>