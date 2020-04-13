<?php

  session_start();
  include('../../../conection.php');
  include('../../../verifica-login.php');

?>

<html lang="pt_br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>Sistema do <?php echo $_SESSION['nome']; ?></title>
    <link href="https://fonts.googleapis.com/css?family=Oxygen:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../style/reset.css">
    <script type="text/javascript" src="../../javascript/script.js"></script>
    <style media="screen">
      form{
        padding: 10%;
        background-color: #094DDE;
      }
      form label{
        color: #fff;
        font-weight: lighter;
        font-size: 20px;
        display: block;
        margin-top: 1%;
      }
      form input{
        padding: 1%;
        border: none;
        margin-left: 2%;
      }
      form input[name='enviar']{
        margin-top: 3%;
        text-align: center;
        margin-left: 10%;
        color: #000;
        background: #fff;
        font-weight: bold;
      }
    </style>
  </head>
<body>

  <form class="form" action="envia_dados.php" method="post">
    <label>Id da Chamada: <input type="number" name="deletar"></label>
    <input type="submit" name="enviar" value="Deletar">
  </form>

</body>
</html>
