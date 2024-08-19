<?php
include_once('includes/logica/functions.php');
include_once('includes/logica/conecta.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="js/scripts.js"></script>
    <title>Home</title>

</head>
<body>
    <main id="home">
      <h1>Bolsacripto</h1>
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
              <div>

                  <!-- TradingView Widget BEGIN -->


              </div>
          </div>
        </div>
        <div class="container" id="cards">
            <div class="card-group">
                <div class="card">
                  <img src="imagens/ibovespa.jpeg.webp" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">O quê esperar do Ibovespa em 2024</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                  </div>
                </div>
                <div class="card">
                  <img src="imagens/Krypto Kotek.jpeg" class="card-img-top" alt="alta btc">
                  <div class="card-body">
                    <h5 class="card-title">Bitcoin rumo a máxima histórica</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                  </div>
                </div>
                <div class="card">
                  <img src="imagens/bearmarket.webp" class="card-img-top" alt="Mercado de baixa">
                  <div class="card-body">
                    <h5 class="card-title">Mercados internacionais amanhecem em baixa após declaração de Putin</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                  </div>
                </div>
              </div>
        </div>
    </main>
   
    <footer>
      <div id="footer-content">
        <div id="footer-contacts">
          <img src="imagens/logo-BC-rmvBG.png" alt="logo-bolsacripto" id="logo">
          <div id="footer-media">
            <a href="" class="footer-link" id="instagram">
              <i class="fa-brands fa-instagram"></i>
            </a>
            <a href="" class="footer-link" id="facebook">
              <i class="fa-brands fa-facebook"></i>
            </a>
            <a href="" class="footer-link" id="whatsapp">
              <i class="fa-brands fa-whatsapp"></i>
            </a>
          </div>

        </div>
        <ul class="footer-list">
          <li>
            <h3>Blog</h3>
          </li>
          <li>
            <a href="" class="footer-link">Artigos</a>
          </li>
          <li>
            <a href="" class="footer-link">Análises</a>
          </li>
          <li>
            <a href="" class="footer-link">Ferramentas</a>
          </li>
        </ul>
        <ul class="footer-list">
          <li>
            <h3>Produtos</h3>
          </li>
          <li>
            <a href="" class="footer-link">App</a>
          </li>
          <li>
            <a href="" class="footer-link"></a>
          </li>
          <li>
            <a href="" class="footer-link">Tech</a>
          </li>
        </ul>
        <div id="footer-subscribe">
          <h3>Newsletter</h3>
          <p>
            Inscreva-se na nossa newsletter para receber as mais novas notícias do mercado financeiro.
          </p>
          <div id="input-group">
            <input type="email" id="email">
            <button>
              <i class="fa-regular fa-envelope"></i>
            </button>
          </div>
          
        </div>
      </div>
      <div id="footer-copyright">
        &#169
        2024 All rights reserved
      </div>
    </footer>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   <script src="js/scripts.js"></script>
</body>
</html>