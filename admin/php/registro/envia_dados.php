<?php

  session_start();
  include('../../../conection.php');
  include('../../../verifica-login.php');

// CHANGE VALUE
  $novoValor = @$_POST['valor'];
  $id = @$_POST['id'];
  $sqlId = "UPDATE chamadas SET cha_valor = $novoValor WHERE cha_id = $id";
  $querySqlId = @mysqli_query($conn, $sqlId);

// DELET ORDER
  $idDeletar = @$_POST['deletar'];
  $sqlDeletar = "DELETE FROM chamadas WHERE cha_id = $idDeletar";
  $queryIdDeletar = mysqli_query($conn, $sqlDeletar);
    if($queryIdDeletar){
      $_SESSION['deletado_com_sucesso'] = true;
    }

  header('Location: ../../registrosOrdens.php');
  exit();

?>
