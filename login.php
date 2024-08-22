<?php
    session_start();
    if(isset($_SESSION['msg']))
    { 
      echo $_SESSION['msg'];
      unset($_SESSION['msg']);
    }
    require('includes/componentes/cabecalho.php');
    require_once('includes/componentes/sticker.php');
?>
    
<body>

<main>
<h1> Login </h1>
    <section>
    <form action="includes/logica/controller.php" method="post">
      <p><label for="email">Email: </label><input type="text" name="email" id="email"></p>
      <p><label for="senha">Senha: </label><input type="password" name="senha" id="senha"></p>
      <p><button type="submit" id='entrar' name='entrar' value="Entrar"> Entrar </button>  </p>      
    </form>
    </section>
</main>
<a href="cadastrarPessoa.php">Novo Usuário</a><br>
<a href="esqueciSenha.php">Esqueci a senha</a>
<div id='msg'>
</div>
<script  type="text/javascript" src="js/scripts.js"></script>
</body>
</html>