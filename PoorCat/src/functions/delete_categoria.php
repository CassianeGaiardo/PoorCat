<?php 
include("connection.php");

mysqli_query($connection,"DELETE FROM categoria WHERE sigla = ".$_GET['idu'].";");

header("location:../cadastro_categoria.php");
?>