
    <title>Abra sua conta</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
<main>
    <section class="container">
      <legend><h2>Nova conta</h2></legend>
    <form  id="registrationForm" action="includes/logica/controller.php" method="post" autocomplete="off">
      <label for="nome">Nome: </label><input  class="input" type="text" name="nome" id="nome"></p>
      <label for="email">email: </label><input class="input" type="text" name="email" id="email"></p>
      <label for="cpf">CPF: </label><input class="input" type="text" name="cpf" id="cpf" data-mask="000.000.000-00"></p>
      <label for="senha">Senha: </label> <input class="input" type="password" name="senha" id="senha"></p>
      <button type="submit"  name='cadastrar' value="Cadastrar"> Cadastrar </button>  </p>    
      <div class="msg" id="mensagem"></div>  
    </form>
    </section>
    <script  type="text/javascript" src="js/scripts.js"></script>
</main>
</body>
</html>