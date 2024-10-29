<!DOCTYPE html>
<html>

<?php

    include_once('includes/componentes/cabecalho.php');
    include_once('includes/logica/functions.php');
    include_once('includes/logica/conecta.php');
    session_start();
    if(!isset($_SESSION['logado']))
    {
        header('location:login.php');
        
    }
    
?>

<title>Recuperar Senha</title>
<link rel="stylesheet" href="css/login.css">
</head>
<body id="forgotPass"> 
    <img src="imagens/logo-BC-rmvBG.png" alt="logo-bolsacripto" id="logo2">
    <div class="container3">
            <form action="includes/logica/controller.php" method="post">
                <Legend><h2>Recupere sua senha</h2></Legend>
                <p>Didite seu email<label for="email"> </label><input class="input2" type="text" name="email" id="email"></p>
                <p><button type="submit" class="btn btn-success" id='recuperar' name='recuperar' value="Recuperar"> Recuperar Senha </button>  </p>
            </form>
            <div id='msg'>
            </div>
            <?php 
                    if(isset($_SESSION['msg']))
                    { 
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                    };
               ?>
    </div>