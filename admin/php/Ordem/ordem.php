<?php

session_start();
include('../../../conection.php');
include('verifica_login.php');

if(empty($_POST['nome_admin']) || empty($_POST['nome_cliente']) || empty($_POST['nome_funcionario']) || empty($_POST['valor_nota']) || empty($_POST['motivo']) || empty($_POST['obs'])){
  header('Location: ../../createOrd.php');
  exit();
}

  $nome_admin = $_POST['nome_admin'];
  $_SESSION['nome_admin'] = $nome_admin;

  $nome_funcionario = $_POST['nome_funcionario'];
  $_SESSION['nome_funcionario'] = $nome_funcionario;

  $nome_cliente = $_POST['nome_cliente'];
  $_SESSION['nome_cliente'] = $nome_cliente;

  $valor_nota = $_POST['valor_nota'];
  $_SESSION['valor_nota'] = $valor_nota;

  $motivo = $_POST['motivo'];
  $_SESSION['motivo'] = $motivo;

  $observacoes = $_POST['obs'];
  $_SESSION['observacoes'] = $observacoes;

  date_default_timezone_set('America/Sao_Paulo');

  $hora = date('H:i');
  $_SESSION['hora'] = $hora;

  $dia = date('d/m/Y');
  $_SESSION['dia'] = $dia;

 ?>

 <!DOCTYPE html>
 <html lang="pt_br" dir="ltr">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, user-scalable=no">
     <title>Pedido</title>

     <script type="text/javascript">
      function imprimir(){
         window.print();
       }
     </script>

     <style media="screen">
     *{
       padding: 0;
       margin: 0;
       font-family: 'Oxygen', sans-serif;
       overflow-x: hidden;
     }
     #main{
       width: 100%;
       margin: 2%;
     }
     #main h1{
       margin-bottom: 1%;
     }
      td{
        padding: 1.8%;
        text-align: center;
        width: 300px;
        border-top: 1px solid rgba(140, 140, 140, 0.8);
        border-bottom: 1px solid rgba(140, 140, 140, 0.8);
        border-right: 1px solid rgba(140, 140, 140, 0.8);
        border-left: 1px solid rgba(140, 140, 140, 0.8);
      }
      span{
        font-weight: bold;
      }
      .form input{
        width: 10%;
        margin-top: 2%;
        background-color: #094DDE;
        border: 0;
        color: #fff;
        padding: 1%;
      }
     </style>

     <style media="print">
      *{
        padding: 0;
        margin: 0;
        font-family: 'Oxygen', sans-serif;
        overflow-x: hidden;
      }
      #main{
        width: 100%;
        margin: 0%;
      }
      #main h1{
        margin-bottom: 2%;
      }
       td{
         padding: 1.8%;
         text-align: center;
         width: 300px;
         border-top: 1px solid rgba(140, 140, 140, 0.8);
         border-bottom: 1px solid rgba(140, 140, 140, 0.8);
         border-right: 1px solid rgba(140, 140, 140, 0.8);
         border-left: 1px solid rgba(140, 140, 140, 0.8);
       }
       span{
         font-weight: bold;
       }
       .form{
         display: none;
       }
     </style>

   </head>
   <body>

    <main id="main">

     <h1>LOGO DA EMPRESA</h1>

     <table>
       <tr>
         <td><span>ORDEM DE SERVIÇO </span></td>
         <td><span>Custo da Ordem: </span><?php echo "R$ " . number_format($valor_nota, 2, ',', ''); ?></td>
         <td><span>Número: </span><?php $sql = "SELECT cha_id FROM chamadas WHERE cha_id = (SELECT MAX(cha_id) AS cha_id FROM chamadas)"; $query = mysqli_query($conn, $sql); $result = mysqli_fetch_array($query); $num = $result[0] + 1; $_SESSION['numero_nota'] = $num; echo "$num"; ?></td>
       </tr>

       <tr>
         <td><span>Data: </span><?php echo $dia; ?></td>
         <td><span>Hora do Chamado: </span><?php echo $hora; ?></td>
         <td><span>Digitado por: </span><?php echo "$nome_admin"; ?></td>
       </tr>

       <tr>
         <td><span>Sobre o Cliente</span></td>
       </tr>

       <tr>
         <td><span>Cliente: </span><?php echo $nome_cliente; ?></td>
         <td><span>Rua: </span><?php $sql = "SELECT cli_end FROM clientes WHERE cli_nome = '$nome_cliente'"; $query = mysqli_query($conn, $sql); $result = mysqli_fetch_array($query); echo "$result[0]"; ?></td>
         <td><span>CPF/CNPJ: </span><?php $sql = "SELECT cli_cpf, cli_cnpj FROM clientes WHERE cli_nome = '$nome_cliente'";$query = mysqli_query($conn, $sql);$result = mysqli_fetch_array($query);if (!empty($result[0])) {echo "$result[0]";}else {echo "$result[1]";}?></td>
         <td><span>Telefone: </span><?php $sql = "SELECT cli_tel FROM clientes WHERE cli_nome = '$nome_cliente'";$query = mysqli_query($conn, $sql);$result = mysqli_fetch_array($query); echo "$result[0]"; ?></td>
       </td>
       </tr>

       <tr>
         <td><span>Sobre o Prestador de Serviço</span></td>
       </tr>

       <tr>
         <td><span>Prestador: </span><?php $sql = "SELECT user_nome FROM user_none WHERE user_nome = '$nome_funcionario'"; $query = mysqli_query($conn, $sql);$result = mysqli_fetch_array($query); echo "$result[0]"; ?></td>
         <td><span>Telefone: </span><?php $sql = "SELECT user_tel FROM user_none WHERE user_nome = '$nome_funcionario'"; $query = mysqli_query($conn, $sql); $result = mysqli_fetch_array($query); echo "$result[0]"; ?></td>
         <td><span>Função: </span><?php $sql = "SELECT user_funcao FROM user_none WHERE user_nome = '$nome_funcionario'"; $query = mysqli_query($conn, $sql); $result = mysqli_fetch_array($query); echo "$result[0]"; ?></td>
       </tr>

       <tr>
         <td><span>Motivo e Observações</span></td>
       </tr>

       <tr>
         <td><span>Motivo: </span><?php echo "$motivo"; ?></td>
         <td><span>Observações: </span><?php echo "$observacoes"; ?></span></td>
         <td><span>Assinatura Funcionário: </span></td>
         <td><span>Assinatura Cliente: </span></td>
       </tr>
     </table>

     <form class="form" action="chamada.php" method="post">
       <input type="submit" onclick="imprimir()">
     </form>

    </main>
   </body>
 </html>
