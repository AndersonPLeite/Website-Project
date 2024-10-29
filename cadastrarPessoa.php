<?php
    include_once('includes/componentes/cabecalho.php');
?>
    <title>Abra sua conta</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>

    <img src="imagens/logo-BC-rmvBG.png" alt="logo-bolsacripto" id="logo2">
<div class="container">
          <legend><h2>Nova conta</h2></legend>
          <form  id="registrationForm" action="includes/logica/controller.php" method="post" autocomplete="off">
            <p>Nome<label for="nome"></label><input  class="input2" type="text" name="nome" id="nome"></p>
            <p>Email<label for="email"> </label><input class="input2" type="text" name="email" id="email"></p>
            <p>CPF<label for="cpf"></label><input class="input2" type="text" name="cpf" id="cpf" data-mask="000.000.000-00"></p>
            <p>Senha<label for="senha"> </label> <input class="input2" type="password" name="senha" id="senha"></p>
            <p><button type="submit" class="btn btn-success" name='cadastrar' value="Cadastrar" onsubmit="validateForm()"> Cadastrar </button></p>
               
            <div class="msg" id="mensagem"></div>  
          </form>
</div>
    <script  type="text/javascript" src="js/scripts.js"></script>
</body>
</html>