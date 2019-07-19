<?php

  session_start();
  include('../../../conection.php');
  include('../../../verifica-login.php');

  $novoValor = $_POST['valor'];
  $id = $_POST['id'];

  $query = "UPDATE chamadas SET cha_valor = $novoValor WHERE cha_id = $id";
  $result = mysqli_query($conn, $query);

  header('Location: ../../registrosOrdens.php');
  exit();

?>
