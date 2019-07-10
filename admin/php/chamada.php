<?php

  session_start();
  include('../../conection.php');

  $nome_admin = $_SESSION['nome_admin'];

  $nome_funcionario = $_SESSION['nome_funcionario'];

  $nome_cliente = $_SESSION['nome_cliente'];

  $valor_nota = $_SESSION['valor_nota'];

  $motivo = $_SESSION['motivo'];

  $observacoes = $_SESSION['observacoes'];

  $hora = $_SESSION['hora'];

  $dia = $_SESSION['dia'];

  $num = $_SESSION['numero_nota'];


  $sql = "INSERT INTO chamadas VALUES ($num, $valor_nota, '$nome_admin', '$nome_funcionario', '$nome_cliente', '$motivo', now(), now())";
  $query = mysqli_query($conn, $sql) or die ("Falha ao enviar os dados!");

  header('Location: ../index.php');


?>
