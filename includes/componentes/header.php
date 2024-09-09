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
                    
                  <a class="navbar-brand alteraPagina" href="homeNoticias.php">Notícias</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="acoes.php">Ibovespa</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link alteraPagina" href="criptomoedas.php">Criptomoedas</a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Categorias
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item alteraPagina"  href="criptomoedas.php">Criptomoedas</a></li>
                          <li><a class="dropdown-item" href="#">Renda Fixa</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item alteraPagina" href="biblioteca.php">Livros</a></li>
                        </ul>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" name="sair" aria-current="page" href="login.php">Sair</a>
                      </li>
                    </ul>
                    <form class="d-flex" role="search">
                      <input class="form-control me-2" type="search"  aria-label="Pesquisar">
                      <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                    </form>
                  </div>
                </div>
              </nav>
        </nav>
      </div>
        
      <div class="tradingview-widget-container">
        <div class="tradingview-widget-container__widget"></div>
        <!--<div class="tradingview-widget-copyright"><a href="https://br.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text"></span></a></div>-->
        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async/>
        {
        "symbols": [
          {
            "proName": "BITSTAMP:BTCUSD",
            "title": "Bitcoin"
          },
          {
            "proName": "BITSTAMP:ETHUSD",
            "title": "Ethereum"
          },
          {
            "description": "",
            "proName": "BMFBOVESPA:B3SA3"
          },
          {
            "description": "",
            "proName": "NASDAQ:TSLA"
          },
          {
            "description": "",
            "proName": "NASDAQ:NVDA"
          },
          {
            "description": "",
            "proName": "NASDAQ:AMZN"
          },
          {
            "description": "",
            "proName": "NASDAQ:AMD"
          },
          {
            "description": "",
            "proName": "NASDAQ:MSFT"
          },
          {
            "description": "",
            "proName": "NASDAQ:GOOGL"
          },
          {
            "description": "",
            "proName": "BINANCE:BTCUSDT"
          },
          {
            "description": "",
            "proName": "COINBASE:SOLUSD"
          },
          {
            "description": "",
            "proName": "BINANCE:RUNEUSDT"
          },
          {
            "description": "",
            "proName": "BINANCE:UNIUSDT"
          },
          {
            "description": "",
            "proName": "BINANCE:NEARUSDT"
          },
          {
            "description": "",
            "proName": "BMFBOVESPA:MRFG3"
          },
          {
            "description": "",
            "proName": "BMFBOVESPA:BRSR6"
          }
        ],
        "showSymbolLogo": true,
        "isTransparent": false,
        "displayMode": "adaptive",
        "colorTheme": "dark",
        "locale": "br"
      }
        </script>
      </div>
    </header>
    <script type="text/javascript" src="js/scripts.js"></script>
