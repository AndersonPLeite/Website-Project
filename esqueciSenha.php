<!DOCTYPE html>
<html>

<?php

    include_once('includes/componentes/cabecalho.php');
    include_once('includes/componentes/header.php');
    include_once('includes/logica/funcoes_pessoa.php');
    include_once('includes/logica/conecta.php');
    /*session_start();
    if(!isset($_SESSION['logado']))
    {
        header('location:login.php');
        
    }
    */
?>

<title>Recuperar Senha</title>
</head>
<body> 
    <form action="includes/logica/logica_pessoa.php" method="post">
        <p><label for="email">email: </label><input type="text" name="email" id="email"></p>
        <p><button type="submit" id='recuperar' name='recuperar' value="Recuperar"> RecuperarSenha </button>  </p>
    </form>