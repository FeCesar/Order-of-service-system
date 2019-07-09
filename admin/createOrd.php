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
    <script type="text/javascript" src="javascript/script.js"></script>
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
           <li><a href="#">Perfil</a></li>
           <li><a href="#">Casdastrar</a></li>
           <li><a href="../logout.php">Sair</a></li>
         </ul>
       </div>
     </nav>

     <main class="container">
        <form class="form" action="php/pdf.php" method="post">
          <p>Nome do Funcionário: <input type="text" name="nome_funcionario" placeholder="Nome do funcionario"></p>
          
        </form>
     </main>

  </body>
</html>
