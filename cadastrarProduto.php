<?php
 include_once('includes/componentes/cabecalho.php');
?>
    <link rel="stylesheet" href="assets/css/index.css">
    <title>Cadastrar Livros</title>
</head>
<body>
<?php require('includes/componentes/header.php') ?>
<main>
    <section>
    <form action="includes/logica/logica_produto.php" method="post">
      <p><label for="nome">Nome: </label><input type="text" name="nome" id="nome"></p>
      <p><label for="descricao">Descrição: </label><input type="text" name="descricao" id="descricao"></p>
      <p><label for="quantidade">Quantidade: </label><input type="number" name="quantidade" id="quantidade"></p>
      <p><button type="submit"  name='cadastrar' value="Cadastrar"> Cadastrar </button>  </p>      
    </form>
    <a href="login.php">Login</a>
    </section>
</main>
</body>
</html>