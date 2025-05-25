<?php
include("connection.php");

$sig_cat = $_POST['sig_cat'];

if(!empty($sig_cat)){
    $query = mysqli_query($connection, "SELECT g.sig_cat, g.nome, g.valor, g.data_gasto FROM gasto g where sig_cat = '$sig_cat';");
} 

header('location:../historico_gastos.php');

?>