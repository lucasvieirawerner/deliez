<?php
  require ('../../config/connection.php');

    $cod = $_POST['cod'];
    $querie="UPDATE Pedido SET estado='1' WHERE codPedido=$cod";
    echo $querie;
  	mysqli_query($conn,$querie);
    header("Location: ../index.php");

?>
