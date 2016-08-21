<?php
include ('config/connection.php');

$texto_base = $_POST['texto_base'];
$query="INSERT INTO `Email_captado_mes`(`email`) VALUES ('$texto_base')";
mysqli_query($conn,$query);
$id = mysqli_insert_id($conn);
if($id == 0){
  echo "1";
}else{
  echo "0";
}

?>
