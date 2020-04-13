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
      *{
        overflow-x: hidden;
      }
      .formulario{
        padding-bottom: 5%;
        padding-left: 5%;
      }
      .form{
        background-color: #094DDE;
      }
      .form h2{
        padding: 3%;
        color: white;
      }
      .form h2 span{
        color: black;
      }
      .form label{
        color: #fff;
        font-weight: lighter;
        font-size: 20px;
        display: block;
        margin-top: 1%;
        width: 100%;
      }
      .form input{
        padding: 0.8%;
        border: none;
        margin-left: 2%;
      }
      .form input[name='enviar']{
        float: left;
        margin-top: 3%;
        text-align: center;
        margin-left: 10%;
        color: #000;
        background: #fff;
        font-weight: bold;
      }
      .form input[name='id']{
        margin-top: 3%;
        text-align: center;
        margin-left: 10%;
        color: #000;
        background: #fff;
        font-weight: bold;
        display: inline-block;
      }
      .form label span{
        color: black;
      }
      .box{
        width: 100%;
        padding: 2%;
      }
    </style>
  </head>
<body>

<div class="box">
   <form action="<?php $_SERVER['PHP_SELF']; ?>?a=id" method="post">
    <label>Id do Usuário ADMIN: </label><input type="number" name="id">
    <input type="submit" value="Buscar">
  </form>
</div>

<?php

    $id = @$_POST['id'];
    $sql = "SELECT * FROM `user_admin` WHERE admin_id = $id";
    $query = @mysqli_query($conn, $sql);

    if($cow = @mysqli_fetch_assoc($query)):

 ?>
<div class="form">

  <h2>Vendo Dados de <span><?php echo $cow['admin_nome']; ?></span></h2>

  <form class="formulario" action="back_gerenciar_dados.php" method="post">
    <label>Nome: <span><?php echo $cow['admin_nome']; ?></span></label>
    <label>Telefone: <span><?php echo $cow['admin_tel']; ?></span></label>
    <label>Login: <span><?php echo $cow['admin_login']; ?></span></label>
    <label>Senha: <span><?php echo $cow['admin_senha']; ?></span></label>
    <label>Email: <span><?php echo $cow['admin_email']; ?></span></label>
    <label>Cpf: <span><?php echo $cow['admin_cpf']; ?></span></label>
    <input type="submit" name="enviar" value="voltar">
  </form>

</div>

<?php endif;?>
</body>
</html>
