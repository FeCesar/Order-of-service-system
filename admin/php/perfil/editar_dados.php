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
      form input[name='id']{
        display: none;
      }
    </style>
  </head>
<body>

  <?php

    $telefone = @$_POST['tel'];
    $email = @$_POST['email'];
    $id = $_POST['id'];

    if(!$telefone):
   ?>

  <form class="form" action="envia_dados.php" method="post">
    <label>Email: <input type="text" name="valorEmail" value="<?php echo $email; ?>"></label>
    <input type="text" name="id" value="<?php echo $id; ?>">
    <input type="submit" name="enviar" value="Trocar">
  </form>

<?php endif; ?>

<?php if(!$email): ?>
  <form class="form" action="envia_dados.php" method="post">
    <label>Telefone: <input type="text" name="valorTelefone" value="<?php echo $telefone; ?>"></label>
    <input type="text" name="id" value="<?php echo $id; ?>">
    <input type="submit" name="enviar" value="Trocar">
  </form>
<?php endif; ?>

</body>
</html>
