<?php
      session_start();
      if(isset($_SESSION['msg']))
      { 
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
      }
      include_once('includes/logica/conecta.php');
      include_once('includes/componentes/cabecalho.php');
      require_once('includes/componentes/header.php');
      include_once('includes/logica/functions.php');
  ?>
<body class="bbtc">
  <main>
  <main class="bbtc">
        <div>
            <h1>Biblioteca Bolsacripto</h1>
            
            <section id="menubbtc">
                <h3>Categorias</h3>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                      Livros
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                      E-books
                    </label>
                  </div>
                  <div>
                    <form method="post" action="buscar.php" class="d-flexB" role="search">
                          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Pesquisar">
                          <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                    </form>
                  </div>
                  
            </section>
        </div>
        <div>
            <section id="livros">
                  <div>
                      <img src="imagens/oIIntli.png" alt="O investidor Inteligente" id="imgLivro3">
                      <button type="button" class="btn btn-success" id="imgLivro3"><a  href="downloadEbook.php">Ver livro</a></button>
                  </div>
                  <div>
                      <img src="imagens/oIIntli.png" alt="O investidor Inteligente" id="imgLivro3">
                      <button type="button" class="btn btn-success" id="imgLivro3"><a  href="downloadEbook.php">Ver livro</a></button>
                  </div>
            </section>
        </div>
    </main>
    <script type="text/javascript" src="js/scripts.js"></script>
    <?php
    include_once('includes/componentes/footer.php');
  ?>
  
</body>
