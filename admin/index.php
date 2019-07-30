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
    <link rel="stylesheet" href="style/index.css">
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

     <main class="container main">
       <h1>Painel</h1>

       <article class="box">
         <h2>Total de Chamadas:</h2>
         <div class="boxDivision">
           <h4>No Dia: </h4>
           <?php echo "<span>31</span>"; ?>
         </div>
         <div class="boxDivision">
           <h4>Na Semana: </h4>
           <?php echo "<span>31</span>"; ?>
         </div>
         <div class="boxDivision">
           <h4>No Mês: </h4>
           <?php echo "<span>31</span>"; ?>
         </div>
         <div class="boxDivision">
           <h4>Total: </h4>
           <?php echo "<span>31</span>"; ?>
         </div>
       </article>

       <article class="box">
         <h2>Chamadas por Funcionários:</h2>

         <div class="table">
           <table>
             <tr>
               <td>Nome Do Funcionário</td>
               <td name="chamadas_atendidas">Chamadas Atendidadas</td>
               <td name="valor_chamadas">Valor Total das Chamadas</td>
             </tr>
           </table>

           <?php

            $queryNomeFuncionario = "SELECT user_nome FROM user_none";
            $resultNomeFuncionario = mysqli_query($conn, $queryNomeFuncionario);
            $dadosNomeFuncionario = mysqli_fetch_assoc($resultNomeFuncionario);
            $rowNomeFuncionario = mysqli_num_rows($resultNomeFuncionario);

              echo "<tr>";
                echo "<td name='nome_funcionario'>" . $dadosNomeFuncionario['user_nome'] . "</td>";
                echo "<td name='chamadas_atendidas'></td>";
                echo "<td name='valor_chamadas'></td>";
              echo "</tr>";

            ?>

         </div>

       </article>

     </main>

</body>
</html>
