<?php

$host = '127.0.0.1';
$usuario = 'root';
$senha = '';
$banco = 'sistema_ordem_de_servico';

$conn = new mysqli($host, $usuario, $senha, $banco) or die("Não foi possivel conectar!");
mysqli_set_charset($conn, 'utf-8');

 ?>
