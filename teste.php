<?php
include ('config/connection.php');


$query="SELECT * FROM `Usuario`";
$result = mysqli_query($conn, $query);
echo "<h1>USUAAAARIOS:</h1><br>";
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
  $codUsuario = $row["codUsuario"];
  echo $codUsuario;
  echo "<br>";
}
echo "______________";
?>
