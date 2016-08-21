<?php

// $banco='normateasy';
// $usuario='root';
// $senhabanco='lw1026';
// $host='localhost';
//
// $conn=mysqli_connect($host,$usuario,$senhabanco) or die ("erro na rotina de coneção".mysql_error());
// $con = mysqli_select_db($conn,$banco)  or die ("erro na rotina de coneção com o banco de dados".mysql());
// mysqli_query($conn,"SET NAMES 'utf8'");
// mysqli_query($conn,'SET character_set_connection=utf8');
// mysqli_query($conn,'SET character_set_client=utf8');
// mysqli_query($conn,'SET character_set_results=utf8');

require ('config/connection.php');
//$conn =  connect();

  $codUsuario = null;
  $codCliente = null;
  $flag = null;
  $senha = null;
  $email = null;
  $email = $_POST['usr'];
  $senha = $_POST['senha'];
  $senha=md5($senha);


  $query="SELECT * FROM `Usuario` WHERE `email` LIKE'$email' AND `senha` LIKE '$senha'";
	$result = mysqli_query($conn, $query);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	$codUsuario = $row["codUsuario"];
  $email = $row["email"];
  $tipousuario = $row["tipousuario"];

  $queryy="SELECT * FROM `Cliente` WHERE `Usuario_codUsuario` LIKE '$codUsuario'";
  $resultt = mysqli_query($conn, $queryy);
	$roww = mysqli_fetch_array($resultt, MYSQLI_ASSOC);
	$codCliente = $roww["codCliente"];

  if($senha == null){
    $flag = 1;
		echo "2";
	}if(($codUsuario != null) && ($codCliente != null)){
      session_destroy();
			session_start();
			$_SESSION['codUsuario']=$row["codUsuario"];
			$_SESSION['email']=$row["email"];
      $flag = 1;
			echo "0".$tipousuario;

	}if($flag != 1){
		echo "1";
	}
?>
