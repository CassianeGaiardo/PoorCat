<?php
include("connection.php");

$nome = ucfirst($_POST['nome']);
$data_gasto = $_POST['data_gasto']; // aaaa/mm/dd
$valor = $_POST['valor'];
$cpf = '123456781';
$sigla = $_POST['sig_cat'];


if(!empty($nome) && !empty($valor)  && !empty($data_gasto) && !empty($sigla)){  
    mysqli_query($connection,"INSERT INTO gasto(nome, data_gasto, valor, cpf_usuario, sig_cat) VALUES ('$nome', '$data_gasto', '$valor', '$cpf', '$sigla')");
} else{
    echo "Preencha os campos corretamente!";
    return false;
}



header('location:../cadastro_gastos.php');

?>