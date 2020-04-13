<?php

  // CREATE DATABASE sistema_ordem_de_servico

  // CONECTION TO DATABASE
  include('../conection.php');

  // CREATE TABLES
  $sqlAdmin = "CREATE TABLE user_admin(admin_id int primary key auto_increment, admin_nome varchar(55), admin_tel varchar(20), admin_login varchar(50), admin_senha varchar(50), admin_email varchar(70), admin_cpf int, admin_dia date, admin_hora time)";
  $sqlEmployee = "CREATE TABLE user_employee(Employee_id int primary key auto_increment, user_nome varchar(70), user_tel varchar(20), user_login varchar(50), user_senha varchar(50), user_email varchar(70), user_funcao varchar(50), user_cpf varchar(11))";
  $sqlClientes = "CREATE TABLE clientes(cli_id int primary key auto_increment, cli_nome varchar(70), cli_tel varchar(20), cli_end varchar(50), cli_cpf int, cli_cnpj int)";
  $sqlChamadas = "CREATE TABLE chamadas(cha_id int primary key auto_increment, cha_valor float(11,2), cha_nome_admin varchar(70), cha_nome_funcionario varchar(70), cha_nome_cliente varchar(70), cha_motivo varchar(50), cha_data date, cha_hora time)";

  $queryAdmin = mysqli_query($conn, $sqlAdmin);
  $queryEmployee = mysqli_query($conn, $sqlEmployee);
  $queryClientes = mysqli_query($conn, $sqlClientes);
  $queryChamadas = mysqli_query($conn, $sqlChamadas);

  $slqAdminDados = "INSERT INTO user_admin(admin_nome, admin_tel, admin_login, admin_senha, admin_email, admin_cpf) VALUES('Felipe Cesar', '18996220090', 'admin', 'admin', 'admin@admin.com', '11111111199')";
  $queryAdminDados = mysqli_query($conn, $slqAdminDados);

  $sqlEmployeeDados = "INSERT INTO user_Employee(user_nome, user_tel, user_login, user_senha, user_email, user_funcao, user_cpf) VALUES ('Matheus Garcia', '18998877662', 'user', 'user', 'user@user.com', 'Detetiazador', '22222222299')";
  $queryEmployeeDados = mysqli_query($conn, $sqlEmployeeDados);
  $sqlEmployeeDadosTwo = "INSERT INTO user_Employee(user_nome, user_tel, user_login, user_senha, user_email, user_funcao, user_cpf) VALUES ('José Garcia', '18992277333', 'jose', 'user', 'jose@user.com', 'Detetiazador-Master', '33322222299')";
  $queryEmployeeDadosTwo = mysqli_query($conn, $sqlEmployeeDadosTwo);

  $sqlClienteDados = "INSERT INTO clientes(cli_nome, cli_tel, cli_end, cli_cpf, cli_cnpj) VALUES ('Márcio Rodrigues', '18997642896', 'Rua Getulio Vargas 68', '33344411199', null)";
  $queryClientesDados = mysqli_query($conn, $sqlClienteDados);
  $sqlClienteDadosTwo = "INSERT INTO clientes(cli_nome, cli_tel, cli_end, cli_cpf, cli_cnpj) VALUES ('Focus Eletrica', '1833233622', 'Avenida Rampazzo Braga 334', '12123456/5544-23', null)";
  $queryClientesDadosTwo = mysqli_query($conn, $sqlClienteDadosTwo);

  header('Location:../index.php');

 ?>
