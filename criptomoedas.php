<?php
    session_start();
    if(isset($_SESSION['msg']))
    { 
      echo $_SESSION['msg'];
      unset($_SESSION['msg']);
    }
    include_once('includes/logica/conecta.php');
    include_once('includes/componentes/cabecalho.php');
    include_once('includes/componentes/header.php');
  
?>
  <body>
  <main id="crypto">
    <div class="container">
      <h1>Criptomoedas</h1>
    </div>
    <section>
    <div>        
    <div class="tradingview-widget-container" id="chart">
              <div class="tradingview-widget-container__widget"></div>
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-advanced-chart.js" async/>
                  {
                    "width": "980",
                    "height": "610",
                    "symbol": "BINANCE:BTCUSDT",
                    "interval": "D",
                    "timezone": "Etc/UTC",
                    "theme": "dark",
                    "style": "2",
                    "locale": "br",
                    "backgroundColor": "rgba(0, 0, 0, 1)",
                    "gridColor": "rgba(216, 216, 216, 0.06)",
                    "hide_legend": true,
                    "withdateranges": true,
                    "hide_side_toolbar": false,
                    "allow_symbol_change": true,
                    "save_image": false,
                    "watchlist": [
                      "BINANCE:BTCUSDT",
                      "COINBASE:BTCUSD",
                      "BINANCE:ETHUSDT",
                      "BINANCE:SOLUSDT",
                      "COINBASE:ETHUSD",
                      "BINANCE:XRPUSDT",
                      "BINANCE:RUNEUSDT",
                      "BINANCE:UNIUSDT",
                      "BINANCE:NEARUSDT",
                      "CRYPTOCAP:USDC",
                      "BINANCE:BNBUSDT",
                      "BINANCE:ADAUSDT",
                      "BINANCE:AVAUSDT",
                      "BINANCE:LINKUSDT",
                      "KUCOIN:DOTUSDT"
                    ],
                    "calendar": false,
                    "hide_volume": true,
                    "support_host": "https://www.tradingview.com"
                  }
                </script>
          </div>
        </div>
      </section>
                      <section class="container-fluid" id="chart2">
                          
                                <div class="tradingview-widget-container">
                                  <div class="tradingview-widget-container__widget"></div>
                                  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
                                  {
                                  "width": "60%",
                                  "height": 550,
                                  "defaultColumn": "overview",
                                  "screener_type": "crypto_mkt",
                                  "displayCurrency": "USD",
                                  "colorTheme": "dark",
                                  "locale": "br",
                                  "isTransparent": false
                                }
                                  </script>
                                </div>
                               
                      </section>
    <div>
        <section class="container" id="iframe">
            <div >
              <iframe width="840" height="515" border-radius="1rem" src="https://www.youtube.com/embed/_-DtYSm3FBw?si=OFOhUcwqytExh2DW" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen id="video"></iframe>
            </div>
            <aside >
               <div id="aside">
                 <h3>Notícias</h3>
               </div>
                
            </aside>
        </section>                      
    </div>                 
    
    </main>
    <?php
        include_once('includes/componentes/footer.php');
    ?>
    <script type="text/javascript" src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>