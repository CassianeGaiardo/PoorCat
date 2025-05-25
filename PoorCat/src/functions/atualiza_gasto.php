<?php
include("connection.php");

$nome = ucfirst($_POST['nome']);
$data_gasto = $_POST['data_gasto']; // aaaa/mm/dd
$valor = $_POST['valor'];
$sigla = $_POST['sig_cat'];

//echo $_GET['idu'];
mysqli_query($connection, "UPDATE gasto SET nome = '".$nome."', data_gasto = '".$data_gasto."', valor = '".$valor."', sig_cat = UPPER('".$sigla."') WHERE cod = ".$_GET['idu'].";");

header('location:../historico_gastos.php');

?>
