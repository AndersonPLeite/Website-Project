<?php

    if(!isset($_SESSION['logado']))
    {
       header('location:login.php');
    
    }
    if(isset($_SESSION['msg']))
    { 
      echo $_SESSION['msg'];
      unset($_SESSION['msg']);
    }
    require('includes/logica/conecta.php');
    require('includes/componentes/cabecalho.php');
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
            </section>
        </div>
        <div>
            <section id="livros">
                <div>
                   <img src="imagens/modelo_Capa-3D_BITCOIM.png" alt="o padrão bitcoin" id="imgLivro">
                   <button type="button" class="btn btn-primary">Ver livro</button> 
                </div>
                <div>
                    <img src="imagens/modelo_Capa-3D_BITCOIM.png" alt="A filosofia do bitcoin" id="imgLivro">
                    <button type="button" class="btn btn-primary">Ver livro</button>
                </div>
                <div>
                  <img src="imagens/oIIntli.png" alt="O investidor Inteligente" id="imgLivro3">
                  <button type="button" class="btn btn-primary">Ver livro</button>

                </div>
                <div>
                  <img src="imagens/oIIntli.png" alt="Investindo em ações no longo prazo" id="imgLivro2">
                  <button type="button" class="btn btn-primary">Ver livro</button>
                </div>
                <div>
                  <img src="imagens/oIIntli.png" alt="O investidor Inteligente" id="imgLivro2">
                  <button type="button" class="btn btn-primary">Ver livro</button>
                </div>
                <div>
                  <img src="imagens/oIIntli.png" alt="O investidor Inteligente" id="imgLivro2">
                  <button type="button" class="btn btn-primary">Ver livro</button>
                </div>
            </section>
        </div>
    </main>
  </main> 
</body>
