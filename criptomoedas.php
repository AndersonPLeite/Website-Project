<?php
    session_start();
    if(isset($_SESSION['msg']))
    { 
      echo $_SESSION['msg'];
      unset($_SESSION['msg']);
    }
  include_once('includes/logica/conecta.php');
  
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bolsacripto-criptomoedas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
  <main id="crypto">
    <div class="container">
      <h1>Criptomoedas</h1>
    </div>
    
      <div class="container" id="chart">
        <div class="tradingview-widget-container" style="height:100%;width:100%">
          <div class="tradingview-widget-container__widget" style="height:calc(100% - 32px);width:100%"></div>
          <div class="tradingview-widget-copyright"><a href="https://br.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text">Monitore todos os mercados no TradingView</span></a></div>
          <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-advanced-chart.js" async/>
          {
          "autosize": true,
          "symbol": "BITSTAMP:BTCUSD",
          "interval": "D",
          "timezone": "Etc/UTC",
          "theme": "light",
          "style": "1",
          "locale": "br",
          "backgroundColor": "rgba(0, 0, 0, 1)",
          "allow_symbol_change": true,
          "watchlist": [
            "BITSTAMP:BTCUSD",
            "BINANCE:ETHUSDT",
            "BINANCE:BTCUSDT.P",
            "COINBASE:ETHUSD",
            "BINANCE:BNBUSDT",
            "BINANCE:NEARUSDT"
          ],
          "compareSymbols": [
            {
              "symbol": "KUCOIN:BTCUSDT",
              "position": "SameScale"
            }
          ],
          "details": true,
          "calendar": false,
          "support_host": "https://www.tradingview.com"
        }
          </script>
        </div>
      </div>
    </main>
    
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
            <a href="" class="footer-link">Corretoras</a>
          </li>
          <li>
            <a href="" class="footer-link">Carteira de investimentos</a>
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
  </body>
</html>