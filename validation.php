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
  $queryTwo = "SELECT * FROM user_none WHERE user_login = '$login' and user_senha = '$pass'";
  $result = mysqli_query($conn, $query);
  $resultTwo = mysqli_query($conn, $queryTwo);
  $row = mysqli_num_rows($result);
  $rowTwo = mysqli_num_rows($resultTwo);

  if($row == 1){
    $dados = mysqli_fetch_array($result);
    $_SESSION['nome'] = $dados[1];
    header('Location: admin/index.php');
    exit();
  }
  elseif($rowTwo == 1){
    $dados = mysqli_fetch_array($resultTwo);
    $_SESSION['nome'] = $dados[1];
    header('Location: none/index.php');
    exit();
  }
  else{
    $_SESSION['nao_autenticado'] = true;
    header('Location: index.php');
    exit();
  }
 ?>
