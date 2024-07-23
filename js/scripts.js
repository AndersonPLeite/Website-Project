const TOTAL_SLIDES = 3;
let currentIndex = 0;

const dots = document.querySelectorAll(".dots button");
const images = document.querySelectorAll(".images img");

function showSlide(index){
    images.forEach(image => image.style.display =
        "none");
        dots.forEach(dot => dot.style.backgroundColor = 
        "transparent");

        images[index].style.display = "block";
        dots[index].style.backgroundColor = "#000";
}

function gotoSlide(index){
    currentIndex = (TOTAL_SLIDES + index) % TOTAL_SLIDES;
    showSlide(currentIndex);
}

function next(){
    gotoSlide(currentIndex + 1);
}
function prev(){
    gotoSlide(currentIndex -1);
}
function dotClicked(index){
    gotoSlide(index);
}
dots.forEach((dot, index)=>{
    dot.addEventListener("click", () => dotClicked
    (index));
});
showSlide(currentIndex);

    


  (   {
    "symbols": [
      {
        "description": "",
        "proName": "BINANCE:BTCUSDT"
      },
      {
        "description": "",
        "proName": "BINANCE:ETHUSDT"
      },
      {
        "description": "",
        "proName": "BINANCE:SOLUSDT"
      },
      {
        "description": "",
        "proName": "BMFBOVESPA:VALE3"
      },
      {
        "description": "",
        "proName": "BMFBOVESPA:PETR4"
      },
      {
        "description": "",
        "proName": "BMFBOVESPA:WEGE3"
      },
      {
        "description": "",
        "proName": "BMFBOVESPA:BBAS3"
      },
      {
        "description": "",
        "proName": "BMFBOVESPA:ITUB4"
      },
      {
        "description": "",
        "proName": "BMFBOVESPA:ABEV3"
      },
      {
        "description": "",
        "proName": "BMFBOVESPA:IBOV"
      },
      {
        "description": "",
        "proName": "NASDAQ:NVDA"
      },
      {
        "description": "",
        "proName": "NASDAQ:META"
      },
      {
        "description": "",
        "proName": "NASDAQ:AMD"
      },
      {
        "description": "",
        "proName": "NASDAQ:COIN"
      },
      {
        "description": "",
        "proName": "NASDAQ:GOOGL"
      },
      {
        "description": "",
        "proName": "NYSE:BABA"
      },
      {
        "description": "",
        "proName": "NYSE:NKE"
      },
      {
        "description": "",
        "proName": "NYSE:XOM"
      },
      {
        "description": "",
        "proName": "BINANCE:ADAUSDT"
      },
      {
        "description": "",
        "proName": "BINANCE:BNBUSDT"
      },
      {
        "description": "",
        "proName": "BINANCE:NEARUSDT"
      },
      {
        "description": "",
        "proName": "BINANCE:UNIUSDT"
      }
    ],
    "showSymbolLogo": true,
    "isTransparent": false,
    "displayMode": "adaptive",
    "colorTheme": "dark",
    "locale": "br"
  });             
                
                

               