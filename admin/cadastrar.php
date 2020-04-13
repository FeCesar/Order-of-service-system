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
    <link rel="stylesheet" href="style/cadastrar.css">
    <script type="text/javascript" src="../javascript/script.js"></script>
    <script type="text/javascript">
      window.onLoad = tamanho_menu();
    </script>
  </head>
  <body>

    <?php if(isset($_SESSION['cadastro_sucesso'])): ?>
      <script type="text/javascript">
        alert("Cadastro de Administrador Feito com Sucesso!");
      </script>
    <?php endif; unset($_SESSION['cadastro_sucesso']); ?>

    <?php if(isset($_SESSION['cadastro_sucesso_two'])): ?>
      <script type="text/javascript">
        alert("Cadastro de Funcionário Feito com Sucesso!");
      </script>
    <?php endif; unset($_SESSION['cadastro_sucesso_two']); ?>

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

     <main class="container main">
        <header>
          <h1>Cadastrar Funcionários</h1>

        <nav>
          <button type="button" name="button" onclick="show_formulario_admin()">Formulário Administradores</button>
          <button type="button" name="button" onclick="show_formulario_funcionario()">Formulário Funcionários</button>
        </nav>
        </header>

        <aside class="aside">
          <div id="formulario_admin">
            <h3>Formulário para Usuários Administradores</h3>

            <form class="form" action="php/cadastrar/cadastrar_admin.php" method="post">
              <p><label>Nome:</label><input type="text" name="nome" placeholder="Ex.: Matheus Garcia" required></p>
              <p><label>Telefone:</label><input type="text" name="telefone" maxlength="11" placeholder="Ex.: 18996220090" required></p>
              <p><label>Login no Site:</label><input type="text" name="login" placeholder="Ex.: admin" required></p>
              <p><label>Senha no Site:</label><input type="text" name="senha" placeholder="Ex.: 1234" required></p>
              <p><label>Email:</label><input type="email" name="email" placeholder="Ex.: admin@gmail.com" required></p>
              <p><label>CPF:</label><input type="text" name="cpf" maxlength="11" placeholder="Ex.: 22211133344" required></p>
              <p><input type="submit" value="Cadastrar Administrador"></p>
            </form>

          </div>

          <div id="formulario_funcionario">
            <h3>Formulário para Usuários Funcionários</h3>

            <form class="form" action="php/cadastrar/cadastrar_funcionario.php" method="post">
              <p><label>Nome:</label><input type="text" name="nome" placeholder="Ex.: Matheus Garcia"></p>
              <p><label>Telefone:</label><input type="text" name="telefone" maxlength="11" placeholder="Ex.: 18996220090"></p>
              <p><label>Login no Site:</label><input type="text" name="login" placeholder="Ex.: admin"></p>
              <p><label>Senha no Site:</label><input type="text" name="senha" placeholder="Ex.: 1234"></p>
              <p><label>Email:</label><input type="email" name="email" placeholder="Ex.: admin@gmail.com"></p>
              <p><label>Função:</label><input type="text" name="funcao" placeholder="Ex.: Gerente"></p>
              <p><label>CPF:</label><input type="text" name="cpf" maxlength="11" placeholder="Ex.: 22211133344"></p>
              <p><input type="submit" value="Cadastrar Funcionário"></p>
            </form>
          </div>
        </aside>

     </main>

</body>
</html>
