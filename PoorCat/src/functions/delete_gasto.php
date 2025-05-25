<?php 

include("connection.php");
mysqli_query($connection,"DELETE FROM gasto WHERE cod = ".$_GET['idu'].";");
echo "deletado com sucesso!";
header("location:../historico_gastos.php");

?>