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
    <link rel="stylesheet" href="style/gerenciarCadastros.css">
    <script type="text/javascript" src="../javascript/script.js"></script>
    <script type="text/javascript">
      window.onLoad = tamanho_menu();
    </script>
  </head>
  <body>

    <?php if(isset($_SESSION['motificado_sucesso'])): ?>
      <script type="text/javascript">
        alert("Ação Realizada com Sucesso!");
      </script>
    <?php endif; unset($_SESSION['motificado_sucesso']); ?>

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
       <h1>Gerenciar Cadastros</h1>
       <aside class="aside">
         <h3>Usuários Administradores</h3>
         <nav>
           <form class="form" action="php/gerenciarCadastros/deleta_usuario_admin.php" method="post">
             <input type="submit" value="Deletar Usuários">
           </form>
           <form class="form" action="php/gerenciarCadastros/edita_usuario_admin.php" method="post">
             <input type="submit" value="Editar Usuários">
           </form>
           <form class="form" action="php/gerenciarCadastros/procurar_user_admin.php" method="post">
             <input type="submit" value="Procurar Usuários">
           </form>
         </nav>
         <?php

            $sqlDadosAdmin = "SELECT * FROM user_admin";
            $queryDadosAdmin = mysqli_query($conn, $sqlDadosAdmin);

            while($row = mysqli_fetch_assoc($queryDadosAdmin)){

          ?>
          <div class="box">
          <ul>
            <li><?php echo "<span>Id: </span>" . $row['admin_id']; ?></li>
            <li><?php echo "<span>Nome: </span>" . $row['admin_nome']; ?></li>
            <li><?php echo "<span>Telefone: </span>" . $row['admin_tel']; ?></li>
            <li><?php echo "<span>Login: </span>" . $row['admin_login']; ?></li>
            <li><?php echo "<span>Senha: </span>" . $row['admin_senha']; ?></li>
            <li><?php echo "<span>Email: </span>" . $row['admin_email']; ?></li>
            <li><?php echo "<span>CPF: </span>" . $row['admin_cpf']; ?></li>
          </ul>
          </div>
        <?php }; ?>
       </aside>

       <aside class="aside">
         <h3>Usuários Funcionarios</h3>
           <nav>
             <form class="form" action="php/gerenciarCadastros/deleta_usuario_employee.php" method="post">
               <input type="submit" name="enviar" value="Deletar Usuários">
             </form>
             <form class="form" action="php/gerenciarCadastros/edita_usuario_employee.php" method="post">
               <input type="submit" name="enviar" value="Editar Usuários">
             </form>
             <form class="form" action="php/gerenciarCadastros/procurar_user_employee.php" method="post">
               <input type="submit" value="Procurar Usuários">
             </form>
           </nav>
         <?php

            $sqlDadosEmployee = "SELECT * FROM user_employee";
            $queryDadosEmployee = mysqli_query($conn, $sqlDadosEmployee);
            while($row = mysqli_fetch_assoc($queryDadosEmployee)){

          ?>
          <div class="box">
          <ul>
            <li><?php echo "<span>Id: </span>" . $row['Employee_id']; ?></li>
            <li><?php echo "<span>Nome: </span>" . $row['user_nome']; ?></li>
            <li><?php echo "<span>Telefone: </span>" . $row['user_tel']; ?></li>
            <li><?php echo "<span>Login: </span>" . $row['user_login']; ?></li>
            <li><?php echo "<span>Senha: </span>" . $row['user_senha']; ?></li>
            <li><?php echo "<span>Email: </span>" . $row['user_email']; ?></li>
            <li><?php echo "<span>Funcao: </span>" . $row['user_funcao']; ?></li>
            <li><?php echo "<span>CPF: </span>" . $row['user_cpf']; ?></li>
          </ul>
          </div>
        <?php }; ?>
       </aside>
     </main>

</body>
</html>
