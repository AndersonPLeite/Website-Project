<?php
  include_once('includes/logica/functions.php');
  include_once('includes/componentes/cabecalho.php');
?>
<header>
      <div class="container-fluid">
        <nav class="navbar border-bottom border-body container-fuid">
          <img src="imagens/logo-BC-rmvBG.png" alt="logo-bolsacripto" id="logo">
            <nav class="navbar navbar-expand-lg " id="navegacao">
              
                <div class="container-fluid" id="container-fluid">
                  <a class="navbar-brand" href="index.php">Página Inicial</a>
                  <a class="navbar-brand" href="noticia.php">Notícias</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="acoes.php">Ibovespa</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="criptomoedas.php">Criptomoedas</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="biblioteca.php">E-books</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" name="sair" aria-current="page" href="login.php">Sair</a>
                      </li>
                    </ul>
                    <form class="d-flex" id="formulario" role="search" method="POST">
                      <input class="form-control me-2" type="search" name="pesquisaNoticia" id="pesquisaNoticia" onsubmit="pesquisa(event)" aria-label="Pesquisar">
                      <button class="btn btn-outline-success" name="pesquisaNoticia" type="submit">Pesquisar</button>
                    </form>
                  </div>
                </div>
              </nav>
      </div>
      <div>
            <div class="tradingviewCripto"></div>   
      </div>
      </div>
      <script type="text/javascript" src="js/scripts.js"></script>
    </header>
    

