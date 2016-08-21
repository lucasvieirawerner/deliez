<?php
include ('config/connection.php');

$usr = $_POST['usr'];
$senha = $_POST['senha'];
$confirmarsenha = $_POST['confirmarsenha'];
$tipousuario = $_POST['tipousuario'];
$codUsuario = null;
$flag = null;

$query="SELECT * FROM `Usuario` WHERE `email` LIKE'$usr' ";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$codUsuario = $row["codUsuario"];

if($senha == null){
  $flag = 1;
  echo "4";
}
if ($codUsuario !=null && $flag != 1){
  $flag = 1;
  echo "3";
}if ($senha != $confirmarsenha && $flag != 1){
  $flag = 1;
  echo "2";
}if ($senha == $confirmarsenha && $flag != 1){
    $senha=md5($senha);
    $querie="INSERT INTO Usuario (nome, email, senha, tipousuario) VALUES('nome', '$usr','$senha', '$tipousuario')";
		mysqli_query($conn,$querie);
    $id = mysqli_insert_id($conn);
		if($id == 0){
      echo "1";
    }
    $querie="INSERT INTO `Cliente`(`Usuario_codUsuario`) VALUES ('$id')";
		mysqli_query($conn,$querie);
		$ide = mysqli_insert_id($conn);
		if($ide == 0){
      echo "1";
    }
    session_destroy();
    session_start();
    $_SESSION['codUsuario']=$id;
    $_SESSION['email']=$usr;
    echo "0";
}


?>
