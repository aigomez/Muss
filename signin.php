<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Escala según el ancho del dispositivo -->
	<title>Sign In</title>

	<!-- CSS -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<link rel="stylesheet" type="text/css" href="estilos/forms.css">

	<!-- JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script> <!-- async/defer ayudan a cargar eficientemente el JS https://flaviocopes.com/javascript-async-defer/-->
	<script src="js/validate_signin.js" async defer></script>

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:500&display=swap" rel="stylesheet">
</head>
<body>
		<form METHOD="POST" onSubmit='onSubmit()'>
			<div class="formBox">
				<fieldset>

					<div class="logo-cont">
						<a href="index">
  						<img class="logo-img" src="imgs/logo.png" alt="logo">
						</a>
					</div>

					<h1 class="formH1">Sign In</h1>

					<?php
						require_once('funciones_forms/fun_signin.php');
					?>

					<div class="field-wrapper">
						<label class="fa fa-user input-icon"></label>
						<input class="input" type="text" id="email" name="email" spellcheck="false" autocomplete="off" autocapitalize="off" placeholder="Username or Email" autofocus>
						<div class="border"></div>
						<label class="required">Field required</label>
						<label class="warning char-email">At least 4 characters</label>
					</div>

					<div class="field-wrapper">
						<label class="fa fa-key input-icon"></label>
						<input class="input" id="pass" name="pass" type="password" spellcheck="false" autocomplete="off" autocapitalize="off" placeholder="Password">
						<div class="border"></div>
						<label class="warning char-pass">At least 8 characters</label>
					</div>

					<div class="field-wrapper-btn btn-top">
						<button class="btn-disable ca" id="signin" name="signin">Sign In</button>
					</div>

					<div class="field-wrapper-btn">
						<button class="btn-enable ca" id="Forgot" name="Forgot">Can't Sign In?</button>
					</div>

					<div class="field-wrapper-btn">
						<button class="btn-enable ca" name="Join">Join</button>
					</div>
				</fieldset>
			</div>

			<div id='recaptcha' class="g-recaptcha" name="g-recaptcha-response"
				data-sitekey="6Lereb4UAAAAAH69ukKaxjfn-hrjKK3fb-hWSj0u"
				data-callback="onSubmit"
				data-size="invisible">
			</div>

		</form>
	</body>
</html>
