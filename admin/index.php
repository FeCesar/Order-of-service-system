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
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <script type="text/javascript">
          google.charts.load('current', {'packages':['corechart']});
          google.charts.setOnLoadCallback(drawChart);

          function drawChart() {

            <?php

                $sql = "SELECT * FROM user_employee";
                $query = mysqli_query($conn, $sql);

             ?>

            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Funcionarios');
            data.addColumn('number', 'Ordens');
            data.addRows([

            <?php

                while($dados = mysqli_fetch_assoc($query)){

             ?>

              ['<?php echo $dados['user_nome'] ?>',

              <?php $sqlNumero = "SELECT * FROM chamadas WHERE cha_nome_funcionario = '" . $dados['user_nome'] . "' ";
                    $queryNumero = mysqli_query($conn, $sqlNumero);
                    $numeroLinhas = mysqli_num_rows($queryNumero);
                    echo $numeroLinhas;
              ?>  ],

            <?php }; ?>
            ]);

            var options = {'title':'Chamadas Atendidas Por Funcionário(Total)'};
            var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
            chart.draw(data, options);
          }
        </script>


        <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

          <?php

              $sql = "SELECT * FROM user_employee";
              $query = mysqli_query($conn, $sql);

           ?>

          var data = new google.visualization.DataTable();
          data.addColumn('string', 'Funcionarios');
          data.addColumn('number', 'Ordens');
          data.addRows([

          <?php

              while($dados = mysqli_fetch_assoc($query)){

           ?>

            ['<?php echo $dados['user_nome'] ?>',

            <?php $sqlNumero = "SELECT * FROM chamadas WHERE cha_nome_funcionario = '" . $dados['user_nome'] . "' and YEARWEEK(cha_data, 0) = YEARWEEK(CURDATE())";
                  $queryNumero = mysqli_query($conn, $sqlNumero);
                  $numeroLinhas = mysqli_num_rows($queryNumero);
                  echo $numeroLinhas;
            ?>  ],

          <?php }; ?>
          ]);

          var options = {'title':'Chamadas Atendidas Por Funcionário(Semana)'};
          var chart = new google.visualization.ColumnChart(document.getElementById('chart_div1'));
          chart.draw(data, options);
        }
        </script>

        <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

          <?php

              $sql = "SELECT * FROM user_employee";
              $query = mysqli_query($conn, $sql);

           ?>

          var data = new google.visualization.DataTable();
          data.addColumn('string', 'Funcionarios');
          data.addColumn('number', 'R$');
          data.addRows([

          <?php

              while($dados = mysqli_fetch_assoc($query)){

           ?>

            ['<?php echo $dados['user_nome'] ?>', <?php $sqlDinheiro = "SELECT sum(cha_valor) FROM chamadas WHERE cha_nome_funcionario = '" . $dados['user_nome'] . "'"; $queryDinheiro = mysqli_query($conn, $sqlDinheiro); $dinheiro = mysqli_fetch_row($queryDinheiro); echo (int)$dinheiro[0]; ?>],

          <?php }; ?>
          ]);

          var options = {'title':'Dinheiro Ganho Das Ordens de Serviços(Total)'};
          var chart = new google.visualization.ColumnChart(document.getElementById('chart_div2'));
          chart.draw(data, options);
        }
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
         <header><h1 name="titulo">Painel</h1></header>

         <div id="chart_div" style="width: 90%; height: 500px;"></div>
         <div id="chart_div1" style="width: 90%; height: 500px;"></div>
         <div id="chart_div2" style="width: 90%; height: 500px;"></div>

       </main>

</body>
</html>
