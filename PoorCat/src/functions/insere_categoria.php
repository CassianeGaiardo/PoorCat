<?php
include("connection.php");

$nome =  ucfirst($_POST['nome']);
$sigla = substr($nome, 0, 4); 
$saldo = $_POST['saldo']; // aaaa/mm/dd
$teto = $_POST['teto'];

echo $sigla; 

if(!empty($sigla) && !empty($nome) && !empty($saldo)  && !empty($teto)){  
    mysqli_query($connection,"INSERT INTO categoria (sigla, nome, saldo, teto) VALUES (UPPER('$sigla'),'$nome','$saldo', '$teto');");
    
} else{
    echo "Preencha os campos corretamente!";
    return false;
}

//$saldo_atual = mysqli_query("SELECT SUM(gasto.valor), categoria.sigla FROM gasto INNER JOIN categoria  ON gasto.sig_cat = categoria.sigla where categoria.sigla = '$sigla'");

header('location:../cadastro_categoria.php');

?>
