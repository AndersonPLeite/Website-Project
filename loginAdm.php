<?php
/*
    session_start();
    if(isset($_SESSION['msg']))
    { 
      echo $_SESSION['msg'];
      unset($_SESSION['msg']);
    }
    */
    include_once('includes/logica/conecta.php');
    include_once('includes/logica/functions.php');
    include_once('includes/componentes/cabecalho.php');
?>
<link rel="stylesheet" href="css/login.css">    
<body id="forgotPass">
    <div id="adm">
      <legend><h2>Login Administrador</h2></legend>
        <form action="includes/logica/controller.php" method="post">
          <p>Email<label for="email"> </label><input class="input2" type="text" name="email" id="email"></p>
          <p>Senha<label for="senha"> </label><input class="input2" type="password" name="senha" id="senha"></p>
          <p><button type="submit" class="btn btn-success" id='entrar' name='entrarAdm' value="Entrar"> Entrar </button>  </p>      
        </form>
    </div>
<div id='msg'>
</div>
<script  type="text/javascript" src="js/scripts.js"></script>
</body>
</html>