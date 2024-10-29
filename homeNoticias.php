<?php
  include_once('includes/logica/functions.php');
  include_once('includes/logica/conecta.php');
?>
<body id="home">
    <main >
      <div class="container">
          <h1>Bolsacripto</h1>
      </div>
          <div class="container" id="top">
            <div class="carousel-inner" id="slider" >
              <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="10000">
                    <img src="imagens/wallpp.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <img src="imagens/wall-street.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="imagens/stock-market-chart.jpg" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
          </div>
        
        <div class="container" id="cards">
                          <div class="card" style="width: 20rem;">
                              <img src="imagens/bearmarket.webp" class="card-img-top" alt="taxa selic">
                              <div class="card-body">
                                <h5 class="card-title">Veja a previsão da Taxa Selic para os próximos anos.</h5>
                                <a href="noticia.php" class="btn btn-success">Ver notícia</a>
                          </div>
                          </div>
                        <div class="card" style="width: 20rem;">
                          <img src="imagens/Krypto Kotek.jpeg" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">Bitcoin têm forte queda no 3° trimestre de 2024</h5>
                            <a href="#" class="btn btn-success">Ver notícia</a>
                          </div>
                        </div>
                        <div class="card" style="width: 20rem;">
                          <img src="imagens/ibovespa.jpeg.webp" class="card-img-top" alt="ibovespa">
                          <div class="card-body">
                            <h5 class="card-title">Ibovespa alcança topo histórico.</h5>
                            <a href="#" class="btn btn-success">Ver notícia</a>
                          </div>
                        
</div>
            <!--<div class="card-group" >
                <div class="card">
                  <img src="imagens/ibovespa.jpeg.webp" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">O quê esperar do Ibovespa em 2024</h5>
                    <p class="card-text"></p>
                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                  </div>
                </div>
                <div class="card">
                  <img src="imagens/Krypto Kotek.jpeg" class="card-img-top" alt="alta btc">
                  <div class="card-body">
                    <h5 class="card-title">Bitcoin rumo a máxima histórica</h5>
                    <p class="card-text"></p>
                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                  </div>
                </div>
                <div class="card">
                  <img src="imagens/bearmarket.webp" class="card-img-top" alt="Mercado de baixa">
                  <div class="card-body">
                    <h5 class="card-title"><a href="noticias.php">Previsão para a Taxa Selic</a></h5>
                    <p class="card-text"></p>
                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                  </div>
                </div>-->
        </div>
       </div>
    </main>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   <script type="text/javascript" src="js/scripts.js"></script>
</body>
</html>