<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Escala según el ancho del dispositivo -->
	<title>Reset</title>

	<!-- CSS -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<link rel="stylesheet" type="text/css" href="estilos/forms.css">

	<!-- JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script> <!-- async/defer ayudan a cargar eficientemente el JS https://flaviocopes.com/javascript-async-defer/-->
	<script src="js/validate_reset.js" async defer></script>

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:500&display=swap" rel="stylesheet">
</head>
<body>
		<form METHOD="POST">
			<div class="formBox">
				<fieldset>

					<div class="logo-cont-reset">
						<a href="index">
  							<img class="logo-img" src="imgs/logo.png" alt="logo">
						</a>
					</div>

					<h1 class="formH1">Reset</h1>

					<?php
						require_once('funciones_forms/fun_reset.php');
					?>

					<div class="field-wrapper">
						<label class="fa fa-key input-icon"></label>
						<input class="input-reset input" id="new_pass" name="new_pass" type="password" spellcheck="false" autocomplete="off" autocapitalize="off" autofocus placeholder="Password">
						<div class="border"></div>
						<label class="warning char-pass">At least 8 characters</label>
					</div>

					<div class="field-wrapper-btn btn-top">
						<button class="btn-disable ca" id="reset" name="reset">Reset</button>
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
