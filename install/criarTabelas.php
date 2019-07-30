<?php

  // CRIAR DATABASE
  // CREATE DATABASE testeum;

  // CONECTAR A DATABASE
  define('HOST', '127.0.0.1');
  define('USUARIO', 'root');
  define('SENHA', '');
  define('DB', 'servicos');

  $conn = mysqli_connect(HOST, SENHA, USUARIO, DB) or die("Não foi possivel conectar!");
  mysqli_set_charset($conn, 'utf-8');

  // CRIAR AS TABELAS
  $sqlAdmin = "CREATE TABLE user_admin(admin_id int primary key auto_increment, admin_nome varchar(55), admin_tel varchar(20), admin_login varchar(50), admin_senha varchar(50), admin_email varchar(70), admin_cpf int, admin_dia date, admin_hora time)";
  $sqlNone = "CREATE TABLE user_none(none_id int primary key auto_increment, user_nome varchar(70), user_tel varchar(20), user_login varchar(50), user_senha varchar(50), user_email varchar(70), user_funcao varchar(50), user_cpf int)";
  $sqlClientes = "CREATE TABLE clientes(cli_id int primary key auto_increment, cli_nome varchar(70), cli_tel varchar(20), cli_end varchar(50), cli_cpf int, cli_cnpj int)";
  $sqlChamadas = "CREATE TABLE chamadas(cha_id int primary key auto_increment, cha_valor float(11,2), cha_nome_admin varchar(70), cha_nome_funcionario varchar(70), cha_nome_cliente varchar(70), cha_motivo varchar(50), cha_data date, cha_hora time)";

  $queryAdmin = mysqli_query($conn, $sqlAdmin);
  $queryNone = mysqli_query($conn, $sqlNone);
  $queryClientes = mysqli_query($conn, $sqlClientes);
  $queryChamadas = mysqli_query($conn, $sqlChamadas);

  echo "Sucesso";

 ?>
