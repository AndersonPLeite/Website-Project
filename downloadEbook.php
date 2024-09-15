<?php
   /*if(isset($_SESSION['msg']))
   { 
     echo $_SESSION['msg'];
     unset($_SESSION['msg']);
   }
    if(!isset($_SESSION['logado']))
    {
       header('location:login.php');
    
    }
    */
    include_once('includes/logica/conecta.php');
    include_once('includes/componentes/cabecalho.php');
    include_once('includes/logica/functions.php');
    include_once('includes/componentes/header.php');
?>
<body>
  <section class="container">
        <div class="download">
            <div class="ebook">
                <h1>E-book</h1>
                <img src="imagens/oIIntli.png" alt="O investidor Inteligente" id="imgLivro"> 
            </div>
            <div class="descricao">
                <h2>O investidor inteligente</h2>
                <p>Autor: Benjamin Graham</p>
                <p>Neste clássico da literatura dos investimentos Graham enfatiza que a inteligência do investidor não está relacionada ao QI ou notas escolares.
                Ser um investidor inteligente significa ser paciente, disciplinado e ávido por aprendizado. </p>
                <p>Faça o download deste livro gratuitamente clicando no botão abaixo</p>
                <button type="button" class="btn btn-danger">Download</button>
            </div>
        </div>
  </section>
  <section>
    <div class="imgEbooks container-fluid">
          <div class="sliderLivros">
                  <img src="imagens/longStocks.png" alt="ebook">
                  <img src="imagens/bitcoin.png" alt="ebook">
                  <img src="imagens/opadrao.png" alt="ebook">
                  <img src="imagens/oIIntli.png" alt="ebook">
                  <img src="imagens/bolsa.png" alt="ebook">
                  <img src="imagens/investidorcapa.png" alt="ebook">
                  <img src="imagens/analise_investimentos.png" alt="ebook">
                  <img src="imagens/longStocks.png" alt="ebook">
                  <img src="imagens/bitcoin.png" alt="ebook">
                  <img src="imagens/opadrao.png" alt="ebook">
                  <img src="imagens/oIIntli.png" alt="ebook">
                  <img src="imagens/bolsa.png" alt="ebook">
                  <img src="imagens/investidorcapa.png" alt="ebook">
                  <img src="imagens/analise_investimentos.png" alt="ebook">
          </div>
          <div class="sliderLivros">
                  <img src="imagens/longStocks.png" alt="ebook">
                  <img src="imagens/bitcoin.png" alt="ebook">
                  <img src="imagens/opadrao.png" alt="ebook">
                  <img src="imagens/oIIntli.png" alt="ebook">
                  <img src="imagens/bolsa.png" alt="ebook">
                  <img src="imagens/investidorcapa.png" alt="ebook">
                  <img src="imagens/analise_investimentos.png" alt="ebook">
                  <img src="imagens/longStocks.png" alt="ebook">
                  <img src="imagens/bitcoin.png" alt="ebook">
                  <img src="imagens/opadrao.png" alt="ebook">
                  <img src="imagens/oIIntli.png" alt="ebook">
                  <img src="imagens/bolsa.png" alt="ebook">
                  <img src="imagens/investidorcapa.png" alt="ebook">
                  <img src="imagens/analise_investimentos.png" alt="ebook">
          </div>
      </div>
  </section>
<?php
  include_once('includes/componentes/footer.php');
?>
<script type="text/javascript" src="js/scripts.js" defer></script>
</body>