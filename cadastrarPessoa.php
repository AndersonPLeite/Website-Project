<?php
 include_once('includes/componentes/cabecalho.php');
?>
    <link rel="stylesheet" href="css/style.css">
    <title>Abra sua conta</title>
</head>
<body>
<?php require('includes/componentes/header.php') ?>
<main>
    <section>
    <form id="cadastro" action="includes/logica/controller.php" method="post" autocomplete="off">
      <p><label for="nome">Nome: </label><input  class="input" type="text" name="nome" id="nome"></p>
      <p><label for="email">email: </label><input class="input" type="text" name="email" id="email"></p>
      <p><label for="cpf">CPF: </label><input class="input" type="text" name="cpf" id="cpf" data-mask="000.000.000-00"></p>
      <p><label for="senha">Senha: </label> <input class="input" type="password" name="senha" id="senha"></p>
      <p><button type="submit"  name='cadastrar' value="Cadastrar" id="btn"> Cadastrar </button>  </p>    
      <div class="msg" id="mensagem"></div>  
    </form>
    <a href="login.php">Login</a>
    </section>
</main>
<script  type="text/javascript" src="js/scripts.js"></script>
</body>
</html>