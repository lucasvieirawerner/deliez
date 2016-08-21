<!DOCTYPE HTML>
<html lang="pt" class="no-js">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Resgistrar | NormatEasy</title>
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="icon" type="image/png" href="../assets/ico/favicon.png">
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,900,900italic,700italic,700,500italic,400italic,500,300italic,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<?php include 'style.php'; ?>
	<!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style2.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
</head>

<body>
	<?php include 'barra_sup_reg.php'; ?>
	<div align="center" class="col-md-12">
		<br><br><br><br><br><br>
		<font style="font-size:55px"><font color="#444"><strong>Registrar</strong></font></font>
	</div>
	<br><br><br><br>
	<ul class="cd-pricing">
		<li>
			<header class="cd-pricing-header">
				<h2>Experimental</h2>

				<div class="cd-price">
					<span>R$0,00</span>
					<span>1 Mês</span>
				</div>
			</header> <!-- .cd-pricing-header -->

			<div class="cd-pricing-features">
				<ul>
					<li class="available"><em>Consutas ilimitadas</em></li>
					<li><em>Pedido de norma</em></li>
					<li><em>Feature 3</em></li>
					<li><em>Feature 4</em></li>
				</ul>
			</div> <!-- .cd-pricing-features -->

			<footer class="cd-pricing-footer">
				<a href="#0">Selecionar</a>
			</footer> <!-- .cd-pricing-footer -->
		</li>

		<li>
			<header class="cd-pricing-header">
				<h2>Trimestral</h2>

				<div class="cd-price">
					<span>R$19.99</span>
					<span>3 Mêses</span>
				</div>
			</header> <!-- .cd-pricing-header -->

			<div class="cd-pricing-features">
				<ul>
					<li class="available"><em>Consutas ilimitadas</em></li>
					<li class="available"><em>Pedido de norma</em></li>
					<li><em>Feature 3</em></li>
					<li><em>Feature 4</em></li>
				</ul>
			</div> <!-- .cd-pricing-features -->

			<footer class="cd-pricing-footer">
				<a href="#0">Selecionar</a>
			</footer> <!-- .cd-pricing-footer -->
		</li>

		<li>
			<header class="cd-pricing-header">
				<h2>Semestral</h2>

				<div class="cd-price">
					<span>R$29.99</span>
					<span>6 Mêses</span>
				</div>
			</header> <!-- .cd-pricing-header -->

			<div class="cd-pricing-features">
				<ul>
					<li class="available"><em>Consutas ilimitadas</em></li>
					<li class="available"><em>Pedido de norma</em></li>
					<li class="available"><em>Feature 3</em></li>
					<li class="available"><em>Feature 4</em></li>
				</ul>
			</div> <!-- .cd-pricing-features -->

			<footer class="cd-pricing-footer">
				<a href="#0">Selecionar</a>
			</footer> <!-- .cd-pricing-footer -->
		</li>
	</ul> <!-- .cd-pricing -->

<div class="cd-form">

		<div class="cd-plan-info">
			<!-- content will be loaded using jQuery - according to the selected plan -->
		</div>

		<div class="cd-more-info">
			<!-- <h3>Need help?</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
		</div>

		<form action="">
			<fieldset>
				<legend>Informações de conta</legend>

				<div class="half-width">
					<label for="userName">Name</label>
					<input type="text" id="userName" name="userName">
				</div>

				<div class="half-width">
					<label for="userEmail">Email</label>
					<input type="email" id="userEmail" name="userEmail">
				</div>

				<div class="half-width">
					<label for="userPassword">Password</label>
					<input type="password" id="userPassword" name="userPassword">
				</div>

				<div class="half-width">
					<label for="userPasswordRepeat">Repeat Password</label>
					<input type="password" id="userPasswordRepeat" name="userPasswordRepeat">
				</div>
			</fieldset>

			<fieldset>
				<legend>Método de pagamento</legend>

				<div>
					<ul class="cd-payment-gateways">
						<li>
							<input type="radio" name="payment-method" id="paypal" value="paypal">
							<label for="paypal">IUGU</label>
						</li>

						<!-- <li>
							<input type="radio" name="payment-method" id="card" value="card" checked>
							<label for="card">Card</label>
						</li> -->
					</ul> <!-- .cd-payment-gateways -->
				</div>

				<!-- <div class="cd-credit-card">
					<div>
						<p class="half-width">
							<label for="cardNumber">Card Number</label>
							<input type="text" id="cardNumber" name="cardNumber">
						</p>

						<p class="half-width">
							<label>Expiration date</label>
							<b>
								<span class="cd-select">
									<select name="card-expiry-month" id="card-expiry-month">
										<option value="1">1</option>
										<option value="1">2</option>
										<option value="1">3</option>
										<option value="1">4</option>
										<option value="1">5</option>
										<option value="1">6</option>
										<option value="1">7</option>
										<option value="1">8</option>
										<option value="1">9</option>
										<option value="1">10</option>
										<option value="1">11</option>
										<option value="1">12</option>
									</select>
								</span>

								<span class="cd-select">
									<select name="card-expiry-year" id="card-expiry-year">
										<option value="2015">2015</option>
										<option value="2015">2016</option>
										<option value="2015">2017</option>
										<option value="2015">2018</option>
										<option value="2015">2019</option>
										<option value="2015">2020</option>
									</select>
								</span>
							</b>
						</p>

						<p class="half-width">
							<label for="cardCvc">Card CVC</label>
							<input type="text" id="cardCvc" name="cardCvc">
						</p>
					</div>
				</div> -->
			</fieldset>

			<fieldset>
				<div>
					<input type="submit" value="Get started">
				</div>
			</fieldset>
		</form>

		<a href="#0" class="cd-close"></a>
	</div> <!-- .cd-form -->

	<div class="cd-overlay"></div> <!-- shadow layer -->

	<br><br><br><br>	<br><br><br><br>	<br><br><br><br>	<br><br><br><br>
	<br><br><br><br>	<br><br><br><br>  <br><br><br><br>  <br><br><br><br>
	<?php include 'barra_inf_reg.php'; ?>

	<script src="js/jquery-2.1.4.js"></script>
	<script src="js/velocity.min.js"></script>
	<script src="js/main.js"></script> <!-- Resource jQuery -->

</body>


</html>
