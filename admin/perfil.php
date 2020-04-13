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
    <link rel="stylesheet" href="style/perfil.css">
    <script type="text/javascript" src="../javascript/script.js"></script>
    <script type="text/javascript">
      window.onLoad = tamanho_menu();
    </script>
  </head>
  <body>

    <?php if(isset($_SESSION['informacoes_atualizadas'])): ?>
      <script type="text/javascript">
        alert("Sucesso na Atualização dos dados!");
      </script>
    <?php endif; unset($_SESSION['informacoes_atualizadas']); ?>

          <div class="btn">
            <button type="button" id="btn_abrir" onclick="btn_menu()">Menu</button>
            <button type="button" name="btn_fechar" id="btn_fechar" onclick="btn_fechar()">Fechar</button>
          </div>

     <nav class="menu" id="menu">
       <div>

         <h1>Bem-vindo, <?php echo $_SESSION['nome']; ?></h1>

         <ul>
           <li><a href="index.php">Painel</a></li>
           <li><a href="createOrdem.php">Criar Ordem de Serviço</a></li>
           <li><a href="registrosOrdens.php">Registros de Ordens</a></li>
           <li><a href="perfil.php">Perfil</a></li>
           <li><a href="cadastrar.php">Casdastrar</a></li>
           <li><a href="gerenciarCadastros.php">Gerenciar Cadastros</a></li>
           <li><a href="../logout.php">Sair</a></li>
         </ul>
       </div>
     </nav>

     <?php

      $nome = $_SESSION['nome'];

        $sqlDados = "SELECT * FROM user_admin WHERE admin_nome = '$nome'";
        $queryDados = mysqli_query($conn, $sqlDados);
        $dados = mysqli_fetch_assoc($queryDados);

      ?>

     <main class="container main">
       <header><h1>Perfil</h1></header>

       <aside class="container-fluid">
         <?php

         $telefone = $dados['admin_tel'];
         $email = $dados['admin_email'];
         $id = $dados['admin_id'];

            echo "<ul>";
              echo "<li><span name='primeiraColuna'>Nome: </span><span name='segundaColuna'>" . $dados['admin_nome'] . "</span></li>";
              echo "<li><span name='primeiraColuna'>Telefone: </span><span name='segundaColuna'>" . $dados['admin_tel'] . "</span><form action='php/perfil/editar_dados.php' method='post'><input type='text' name='tel' value='$telefone'><input type='text' name='id' value='$id'><input type='submit' value='Editar'></form></li>";
              echo "<li><span name='primeiraColuna'>Login: </span><span name='segundaColuna'>" . $dados['admin_login'] . "</span></li>";
              echo "<li><span name='primeiraColuna'>Senha: </span><span name='segundaColuna'>" . $dados['admin_senha'] . "</span></li>";
              echo "<li><span name='primeiraColuna'>Email: </span><span name='segundaColuna'>" . $dados['admin_email'] . "</span><form action='php/perfil/editar_dados.php' method='post'><input type='email' name='email' value='$email'><input type='text' name='id' value='$id'><input type='submit' value='Editar'></form></li>";
              echo "<li><span name='primeiraColuna'>CPF: </span><span name='segundaColuna'>" . $dados['admin_cpf'] . "</span></li>";
            echo "</ul>";
          ?>
       </aside>

     </main>

</body>
</html>
