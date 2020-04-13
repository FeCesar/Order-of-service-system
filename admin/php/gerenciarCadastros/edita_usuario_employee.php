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
    <label>Id do Usuário Funcionário: </label><input type="number" name="id">
    <input type="submit" value="Buscar">
  </form>
</div>

<?php

    $id = @$_POST['id'];
    $sql = "SELECT * FROM `user_employee` WHERE Employee_id = $id";
    $query = @mysqli_query($conn, $sql);

    if($cow = @mysqli_fetch_assoc($query)):

 ?>
<div class="form">

  <h2>Editar Dados de <span><?php echo $cow['user_nome']; ?></span></h2>

  <form class="formulario" action="envia_dados.php" method="post">
    <input type="int" name="idEmployeeEditar" value="<?php echo $cow['Employee_id']; ?>" style="display: none;">
    <label>Nome: <input type="text" name="nomeEmployee" value="<?php echo $cow['user_nome']; ?>"></label>
    <label>Telefone: <input type="text" maxlength="11" name="telEmployee" value="<?php echo $cow['user_tel']; ?>"></label>
    <label>Login: <input type="text" name="loginEmployee" value="<?php echo $cow['user_login']; ?>"></label>
    <label>Senha: <input type="text" name="senhaEmployee" value="<?php echo $cow['user_senha']; ?>"></label>
    <label>Email: <input type="email" name="emailEmployee" value="<?php echo $cow['user_email']; ?>"></label>
    <label>Função: <input type="text" name="funcaoEmployee" value="<?php echo $cow['user_funcao']; ?>"></label>
    <label>Cpf: <input type="text" name="cpfEmployee" value="<?php echo $cow['user_cpf']; ?>"></label>
    <input type="submit" name="enviar" value="Atualizar!">
  </form>

</div>

<?php endif;?>
</body>
</html>
