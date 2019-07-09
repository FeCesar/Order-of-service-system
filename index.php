<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt_br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>Sistema</title>
    <link rel="stylesheet" href="style/index.css">
    <link href="https://fonts.googleapis.com/css?family=Oxygen:300,400&display=swap" rel="stylesheet">
  </head>
  <body>

    <div class="box">
      <h1>Ordens de Serviços <span>v.0.1</span></h1>

      <?php if (isset($_SESSION['nao_autenticado'])): ?>
        <style media="screen">
        .box h4{
          text-align: center;
          margin-bottom: 5%;
        }
        .box h4 span{
          color: red;
        }
        </style>
      <h4>Login ou Senha <span>Inválidos!</span></h4>

      <?php endif; unset($_SESSION['nao_autenticado']);  ?>

        <form class="form" action="validation.php" method="post">
          <input type="text" name="login" placeholder="Login" required>
          <input type="password" name="password" placeholder="Senha" required>
          <input class="send" type="submit" name="send" value="Login">
        </form>
    </div>

  </body>
</html>
