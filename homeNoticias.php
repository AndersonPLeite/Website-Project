<?php
  include_once('includes/logica/functions.php');
  include_once('includes/logica/conecta.php');
?>
<body>
    <main id="home">
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
            <div class="stocks">
              <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container" id="futures">
  <div class="tradingview-widget-container__widget"></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async/>
  {
  "colorTheme": "dark",
  "dateRange": "12M",
  "showChart": true,
  "locale": "br",
  "largeChartUrl": "",
  "isTransparent": false,
  "showSymbolLogo": true,
  "showFloatingTooltip": false,
  "width": "400",
  "height": "398",
  "border-radius": "5",
  "plotLineColorGrowing": "rgba(41, 98, 255, 1)",
  "plotLineColorFalling": "rgba(41, 98, 255, 1)",
  "gridLineColor": "rgba(42, 46, 57, 0)",
  "scaleFontColor": "rgba(209, 212, 220, 1)",
  "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
  "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
  "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
  "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
  "symbolActiveColor": "rgba(41, 98, 255, 0.12)",
  "tabs": [
    {
      "title": "Indices",
      "symbols": [
        {
          "s": "FOREXCOM:SPXUSD",
          "d": "S&P 500 Index"
        },
        {
          "s": "FOREXCOM:NSXUSD",
          "d": "US 100 Cash CFD"
        },
        {
          "s": "FOREXCOM:DJI",
          "d": "Dow Jones Industrial Average Index"
        },
        {
          "s": "INDEX:NKY",
          "d": "Nikkei 225"
        },
        {
          "s": "INDEX:DEU40",
          "d": "DAX Index"
        },
        {
          "s": "FOREXCOM:UKXGBP",
          "d": "FTSE 100 Index"
        },
        {
          "s": "COMEX:GC1!"
        },
        {
          "s": "CME:ETH1!"
        },
        {
          "s": "BMFBOVESPA:WIN1!"
        },
        {
          "s": "BMFBOVESPA:IND1!"
        }
      ],
      "originalTitle": "Indices"
    },
    {
      "title": "Futures",
      "symbols": [
        {
          "s": "CME_MINI:ES1!",
          "d": "S&P 500"
        },
        {
          "s": "CME:6E1!",
          "d": "Euro"
        },
        {
          "s": "COMEX:GC1!",
          "d": "Gold"
        },
        {
          "s": "NYMEX:CL1!",
          "d": "WTI Crude Oil"
        },
        {
          "s": "NYMEX:NG1!",
          "d": "Gas"
        },
        {
          "s": "CBOT:ZC1!",
          "d": "Corn"
        }
      ],
      "originalTitle": "Futures"
    },
    {
      "title": "Bonds",
      "symbols": [
        {
          "s": "CBOT:ZB1!",
          "d": "T-Bond"
        },
        {
          "s": "CBOT:UB1!",
          "d": "Ultra T-Bond"
        },
        {
          "s": "EUREX:FGBL1!",
          "d": "Euro Bund"
        },
        {
          "s": "EUREX:FBTP1!",
          "d": "Euro BTP"
        },
        {
          "s": "EUREX:FGBM1!",
          "d": "Euro BOBL"
        }
      ],
      "originalTitle": "Bonds"
    },
    {
      "title": "Forex",
      "symbols": [
        {
          "s": "FX:EURUSD",
          "d": "EUR to USD"
        },
        {
          "s": "FX:GBPUSD",
          "d": "GBP to USD"
        },
        {
          "s": "FX:USDJPY",
          "d": "USD to JPY"
        },
        {
          "s": "FX:USDCHF",
          "d": "USD to CHF"
        },
        {
          "s": "FX:AUDUSD",
          "d": "AUD to USD"
        },
        {
          "s": "FX:USDCAD",
          "d": "USD to CAD"
        }
      ],
      "originalTitle": "Forex"
    }
  ]
}
  </script>
</div>
<!-- TradingView Widget END -->
            </div>
          </div>
        
        <div class="container" id="cards">
            <div class="card-group" >
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
                    <h5 class="card-title">Mercados internacionais amanhecem em baixa após declaração de Putin</h5>
                    <p class="card-text"></p>
                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                  </div>
                </div>
              </div>
      </div>
    </main>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   <script type="text/javascript" src="js/scripts.js"></script>
</body>
</html>