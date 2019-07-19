<?php

  session_start();
  include('../conection.php');
  include('../verifica-login.php');

?>

<!DOCTYPE html>
<html lang="pt_br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>Sistema do <?php echo $_SESSION['nome']; ?></title>
    <link href="https://fonts.googleapis.com/css?family=Oxygen:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/reset.css">
    <link rel="stylesheet" href="style/createOrd.css">
    <script type="text/javascript" src="../javascript/script.js"></script>
    <script type="text/javascript">
      window.onLoad = tamanho_menu();
    </script>
  </head>
  <body>

          <div class="btn">
            <button type="button" id="btn_abrir" onclick="btn_menu()">Menu</button>
            <button type="button" name="btn_fechar" id="btn_fechar" onclick="btn_fechar()">Fechar</button>
          </div>

     <nav class="menu" id="menu">
       <div>

         <h1>Bem-vindo, <?php echo $_SESSION['nome']; ?></h1>

         <ul>
           <li><a href="index.php">Painel</a></li>
           <li><a href="createOrd.php">Criar Ordem de Serviço</a></li>
           <li><a href="registrosOrdens.php">Registros de Ordens</a></li>
           <li><a href="#">Perfil</a></li>
           <li><a href="#">Casdastrar</a></li>
           <li><a href="../logout.php">Sair</a></li>
         </ul>
       </div>
     </nav>

     <main class="container">

       <header class="header">
        <h1>Fazer Ordem De Serviço</h1>
       </header>

        <form class="form" action="php/ordem/ordem.php" method="post">
          <p>Nome do Funcionário: <select name="nome_funcionario" required>
            <option>Selecionar...</option>

              <?php
                $sql = "SELECT * FROM user_none";
                $query = mysqli_query($conn, $sql);

                while ($dado = mysqli_fetch_array($query)) {
              ?>

              <option value="<?php echo $dado['user_nome'];?>"><?php echo $dado['user_nome'];?></option>

              <?php }?>

          </select></p>

          <p>Nome do ADMIN: <select name="nome_admin" required>

            <option value="<?php echo $_SESSION['nome'];?>"><?php echo $_SESSION['nome'];?></option>

          </select></p>

          <p>Nome do Cliente: <select name="nome_cliente" required>
            <option>Selecionar...</option>

              <?php
                $sql = "SELECT * FROM clientes";
                $query = mysqli_query($conn, $sql);

                while ($dado = mysqli_fetch_array($query)) {
              ?>

              <option value="<?php echo $dado['cli_nome'];?>"><?php echo $dado['cli_nome'];?></option>

              <?php }?>

          </select></p>

          <p>Motivo da Chamada: <input type="text" name="motivo"></p>

          <p>Observações: <input type="text" name="obs"> </p>

          <p>Valor da Ordem: <input type="number" name="valor_nota" step="0.01"></p>

          <p><input type="submit" value="Imprimir Ordem"></p>

        </form>
     </main>

  </body>
</html>
