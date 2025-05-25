<?php include("connection.php");
session_start();
// as variáveis email e senha recebem os dados digitados na página anterior
$email = $_POST['email'];
$senha = $_POST['senha'];

// A variavel $result pega as varias $email e $senha, faz uma 
//pesquisa na tabela de usuarios
$result = mysqli_query($connection,"SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'");

if(mysqli_num_rows ($result) > 0 ){
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;

    header('location:../inicio.php');
}
else{
  unset ($_SESSION['email']);
  unset ($_SESSION['senha']);
  echo "não achei...";
  header('location:../login.php');
   
  }
?>