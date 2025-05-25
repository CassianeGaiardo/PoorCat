<?php
include("connection.php");

$nome = ucfirst($_POST['nome']);
$teto = $_POST['teto'];

//$sigla = substr($nome, 0, 4); 

echo $_GET['idu'];
echo $_POST['nome'],$_POST['teto'];
mysqli_query($connection, "UPDATE categoria SET nome = '".$nome."', teto = '".$teto."' WHERE sigla =".$_GET['idu'].";");

header('location:../todas_categorias.php');
?>
