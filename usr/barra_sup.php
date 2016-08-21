<!-- <!DOCTYPE HTML> -->
<html lang="pt-br">
<head>
<title>Deliez - App</title>
  <!-- <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> -->
  <meta charset="UTF-8">
  <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->

	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="icon" type="image/png" href="../assets/ico/favicon.png">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,900,900italic,700italic,700,500italic,400italic,500,300italic,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<?php include 'style.php'; ?>
</head>
<body>


<div class="navbar-nav navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.php"><img src="../assets/img/logo.png"  ></a><br><br><br><br><br>
  </div>
    <div class="collapse navbar-collapse" align="right">
        <!-- <ul class="nav navbar-nav navbar-right"> -->
          <br>
      			<form>
              <?php
              session_start();
              include ('../config/connection.php');
              ?>
              <?php   /*: http://stackoverflow.com/questions/905222/enter-key-press-event-in-javascript*/ ?>
      				<!-- <input type="text" name="search" id="tip_search_input" list="search" autocomplete=off onkeypress="return runScript(event)" required> -->
      		  </form>
             &nbsp; &nbsp;
         <!-- </ul> -->
         <div align="right">
             <a href="../index.php" class="btn btn-primary">Sair</a>
         </div>
		</div>
  </div>
</div>
<br><br><br>

    	<div class="container">
