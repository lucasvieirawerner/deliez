<?php
  require ('../../config/connection.php');



  $Pedido = $_POST['nome'];
  $descricao = $_POST['desc'];
  $rua = $_POST['rua'];
  $numero = $_POST['num'];
  $cidade = $_POST['cidade'];
  $tipopedido = $_POST['tipopedido'];


  $query="INSERT INTO Pedido (Pedido, descricao, rua, numero, cidade, tipopedido) VALUES('$Pedido', '$descricao', '$rua', '$numero', '$cidade', '$tipopedido')
";
mysqli_query($conn,$query);
$id = mysqli_insert_id($conn);
header("Location: ../index.php");
if($id == 0){
  echo "não deu boa mano";
}
header("Location: ../index.php");
?>
