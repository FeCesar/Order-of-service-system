<?php
session_start();
include('conection.php');

if(empty($_POST['login']) || empty($_POST['password'])){
  header('Location: index.php');
  exit();
}

  $login = mysqli_real_escape_string($conn, $_POST['login']);
  $pass = mysqli_real_escape_string($conn, $_POST['password']);

  $query = "SELECT * FROM user_admin WHERE admin_login = '$login' and admin_senha = '$pass'";
  $result = mysqli_query($conn, $query);
  $row = mysqli_num_rows($result);

  if($row == 1){

    $dados = mysqli_fetch_array($result);

    $_SESSION['nome'] = $dados[1];
    header('Location: admin/index.php');
    exit();
  } else{
    $_SESSION['nao_autenticado'] = true;
    header('Location: index.php');
    exit();
  }

 ?>
