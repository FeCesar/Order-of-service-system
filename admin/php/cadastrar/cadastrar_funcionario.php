<?php

session_start();
include('../../../conection.php');
include('../ordem/verifica_login.php');

  $nome = $_POST['nome'];
  $telefone = $_POST['telefone'];
  $login = $_POST['login'];
  $senha = $_POST['senha'];
  $email = $_POST['email'];
  $funcao = $_POST['funcao'];
  $cpf = $_POST['cpf'];

  $sqlInsertDados = "INSERT INTO user_employee(user_nome, user_tel, user_login, user_senha, user_email, user_funcao, user_cpf) VALUES('$nome', '$telefone', '$login', '$senha', '$email', '$funcao', '$cpf')";
  $querySqlInsertDados = mysqli_query($conn, $sqlInsertDados);
    if($querySqlInsertDados){
        $_SESSION['cadastro_sucesso_two'] = true;
        header('Location: ../../cadastrar.php');
    }
?>
