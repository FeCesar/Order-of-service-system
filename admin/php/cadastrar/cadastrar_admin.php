<?php

session_start();
include('../../../conection.php');
include('../ordem/verifica_login.php');

  $nome = $_POST['nome'];
  $telefone = $_POST['telefone'];
  $login = $_POST['login'];
  $senha = $_POST['senha'];
  $email = $_POST['email'];
  $cpf = $_POST['cpf'];

  $sqlInsertDados = "INSERT INTO user_admin(admin_nome, admin_tel, admin_login, admin_senha, admin_email, admin_cpf) VALUES('$nome', '$telefone', '$login', '$senha', '$email', '$cpf')";
  $querySqlInsertDados = mysqli_query($conn, $sqlInsertDados);
    if($querySqlInsertDados){
        $_SESSION['cadastro_sucesso'] = true;
        header('Location: ../../cadastrar.php');
    }
?>
