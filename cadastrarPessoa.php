<?php
 include_once('includes/componentes/cabecalho.php');
?>
    <link rel="stylesheet" href="assets/css/index.css">
    <title>Cadastrar Usuário</title>
</head>
<body>
<?php require('includes/componentes/header.php') ?>
<main>
    <section>
    <form action="includes/logica/logica_pessoa.php" method="post">
      <p><label for="nome">Nome: </label><input type="text" name="nome" id="nome"></p>
      <p><label for="email">email: </label><input type="text" name="email" id="email"></p>
      <p><label for="cpf">CPF: </label><input type="text" name="cpf" id="cpf"></p>
      <p><label for="senha">Senha: </label> <input type="password" name="senha" id="senha"></p>
      <p><button type="submit"  name='cadastrar' value="Cadastrar"> Cadastrar </button>  </p>      
    </form>
    <a href="login.php">Login</a>
    </section>
</main>
</body>
</html>