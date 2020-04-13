<?php

  session_start();
  include('../../../conection.php');
  include('../../../verifica-login.php');

  $idAdminDeletar = @$_POST['idAdminDeletar'];
  $idEmployeeDeletar = @$_POST['idEmployeeDeletar'];


  if($idAdminDeletar){
    $sql = "DELETE FROM user_admin WHERE admin_id = $idAdminDeletar";
    $query = mysqli_query($conn, $sql);
    $_SESSION['modificado_sucesso'] = true;
    header('Location: ../../gerenciarCadastros.php');
  }

  if($idEmployeeDeletar){
    $sql = "DELETE FROM user_employee WHERE Employee_id = $idEmployeeDeletar";
    $query = mysqli_query($conn, $sql);
    $_SESSION['motificado_sucesso'] = true;
    header('Location: ../../gerenciarCadastros.php');
  }

  $idAdminEditar = @$_POST['idAdminEditar'];
  $nome = @$_POST['nome'];
  $telefone = @$_POST['tel'];
  $login = @$_POST['login'];
  $senha = @$_POST['senha'];
  $email = @$_POST['email'];
  $cpf = @$_POST['cpf'];

  $idEmployeeEditar = @$_POST['idEmployeeEditar'];

  if($idAdminEditar){
    $sql1 = "UPDATE user_admin SET admin_nome = '$nome' WHERE admin_id = $idAdminEditar";
    $query1 = mysqli_query($conn, $sql1);

    $sql2 = "UPDATE user_admin SET admin_tel = '$telefone' WHERE admin_id = $idAdminEditar";
    $query2 = mysqli_query($conn, $sql2);

    $sql3 = "UPDATE user_admin SET admin_login = '$login' WHERE admin_id = $idAdminEditar";
    $query3 = mysqli_query($conn, $sql3);

    $sql4 = "UPDATE user_admin SET admin_senha = '$senha' WHERE admin_id = $idAdminEditar";
    $query4 = mysqli_query($conn, $sql4);

    $sql5 = "UPDATE user_admin SET admin_email = '$email' WHERE admin_id = $idAdminEditar";
    $query5 = mysqli_query($conn, $sql5);

    $sql6 = "UPDATE user_admin SET admin_cpf = '$telefone' WHERE admin_id = $idAdminEditar";
    $query6 = mysqli_query($conn, $sql6);

    $_SESSION['motificado_sucesso'] = true;
    header('Location: ../../gerenciarCadastros.php');
  }

  $idEmployeeEditar = @$_POST['idEmployeeEditar'];
  $nomeEmployee = @$_POST['nomeEmployee'];
  $telefoneEmployee = @$_POST['telEmployee'];
  $loginEmployee = @$_POST['loginEmployee'];
  $senhaEmployee = @$_POST['senhaEmployee'];
  $emailEmployee = @$_POST['emailEmployee'];
  $funcaoEmployee = @$_POST['funcaoEmployee'];
  $cpfEmployee = @$_POST['cpfEmployee'];

  if($idEmployeeEditar){
    $sql1 = "UPDATE user_employee SET user_nome = '$nomeEmployee' WHERE Employee_id = $idEmployeeEditar";
    $query1 = mysqli_query($conn, $sql1);

    $sql2 = "UPDATE user_employee SET user_tel = '$telefoneEmployee' WHERE Employee_id = $idEmployeeEditar";
    $query2 = mysqli_query($conn, $sql2);

    $sql3 = "UPDATE user_employee SET user_login = '$loginEmployee' WHERE Employee_id = $idEmployeeEditar";
    $query3 = mysqli_query($conn, $sql3);

    $sql4 = "UPDATE user_employee SET user_senha = '$senhaEmployee' WHERE Employee_id = $idEmployeeEditar";
    $query4 = mysqli_query($conn, $sql4);

    $sql5 = "UPDATE user_employee SET user_email = '$emailEmployee' WHERE Employee_id = $idEmployeeEditar";
    $query5 = mysqli_query($conn, $sql5);

    $sql6 = "UPDATE user_employee SET user_funcao = '$funcaoEmployee' WHERE Employee_id = $idEmployeeEditar";
    $query6 = mysqli_query($conn, $sql6);

    $sql7 = "UPDATE user_employee SET user_cpf = '$cpfEmployee' WHERE Employee_id = $idEmployeeEditar";
    $query7 = mysqli_query($conn, $sql7);

    $_SESSION['motificado_sucesso'] = true;
    header('Location: ../../gerenciarCadastros.php');
  }




?>
