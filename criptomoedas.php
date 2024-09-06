<?php
    session_start();
    if(isset($_SESSION['msg']))
    { 
      echo $_SESSION['msg'];
      unset($_SESSION['msg']);
    }
    include_once('includes/logica/conecta.php');
    include_once('includes/componentes/cabecalho.php');
    include_once('includes/logica/functions.php');
  
?>
  <body>
  <main id="crypto">
    <section>
        <div class="container">
            <h1>Criptomoedas</h1>
        </div>
    </section>
    <section>
        <div id="chart">
            <div class="tradingview-widget-container">
                            <div class="tradingview-widget-container__widget"></div>
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async/>
                                    {
                                        "width": "100%",
                                        "height": 550,
                                        "defaultColumn": "overview",
                                        "screener_type": "crypto_mkt",
                                        "displayCurrency": "USD",
                                        "colorTheme": "dark",
                                        "locale": "br",
                                        "isTransparent": true
                                    }
                    </script>
            </div>
        </div>
             

    </section>
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
  </main>
  <script type="text/javascript" src="js/scripts.js"></script>
</body>
</html>