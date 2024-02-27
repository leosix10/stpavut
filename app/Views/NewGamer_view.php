<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V8</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url() ?>/assets/login_files/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/login_files/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/login_files/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/login_files/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/login_files/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/login_files/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/login_files/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/login_files/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/login_files/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/login_files/css/main.css">
<!--===============================================================================================-->
    <style>
        .container-login100{
            background-color: #343336;
        }
    </style>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178" method="POST" action="<?php echo base_url() ?>/Gamer/Enregistrement" enctype="multipart/form-data">
					<span class="login100-form-title">
						Veuillez vous inscrire
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter email">
						<input class="input100" type="text" name="email" placeholder="votre email">
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter name">
                        <input class="input100" type="text" name="nom" placeholder="votre nom">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter first name">
                        <input class="input100" type="text" name="prenom" placeholder="votre prénom">
                        <span class="focus-input100"></span>
                    </div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Please enter password">
						<input class="input100" type="password" name="pass" placeholder="votre mot de passe">
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Please enter password">
                        <input class="input100" type="file" name="laphoto" placeholder="votre avatar" style="padding-top: 14px;">
                        <span class="focus-input100"></span>
                    </div>

					<div class="text-right p-t-13 p-b-23">
						<p>
                            <span class="txt1 p-b-9">

						    </span>
                        </p>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							S'inscrire
						</button>
					</div>

					<div class="flex-col-c p-t-40 p-b-40">
						<span class="txt1 p-b-9">
                            <a class="txt3" href="<?php echo base_url()?>">Retourner sur le site</a>
						</span>

					</div>
				</form>
			</div>
		</div>
	</div>
	
	
<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>/assets/login_files/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>/assets/login_files/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>/assets/login_files/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url() ?>/assets/login_files/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>/assets/login_files/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>/assets/login_files/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo base_url() ?>/assets/login_files/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>/assets/login_files/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>/assets/login_files/js/main.js"></script>

</body>
</html>