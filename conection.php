<?php

  define('HOST', '127.0.0.1');
  define('USUARIO', 'root');
  define('SENHA', '');
  define('DB', 'servicos');

  $conn = mysqli_connect(HOST, SENHA, USUARIO, DB) or die("Não foi possivel conectar!");

 ?>
