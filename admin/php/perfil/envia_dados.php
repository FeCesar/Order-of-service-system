<?php

  session_start();
  include('../../../conection.php');
  include('../../../verifica-login.php');

  $telefone = @$_POST['valorTelefone'];
  $email = $_POST['valorEmail'];
  $id = $_POST['id'];

  if(!$telefone){

    $sqlEmail = "UPDATE user_admin SET admin_email = '$email' WHERE admin_id = $id";
    $querySqlEmail = mysqli_query($conn, $sqlEmail);
    $_SESSION['informacoes_atualizadas'] = true;
    header('Location: ../../perfil.php');

  }

  if(!$email){

    $sqlTelefone = "UPDATE user_admin SET admin_tel = $telefone WHERE admin_id = $id";
    $querySqlTelefone = mysqli_query($conn, $sqlTelefone);
    $_SESSION['informacoes_atualizadas'] = true;
    header('Location: ../../perfil.php');

  }


 ?>
