window.onload = function(){
	var formulario = document.getElementById("cadastro");
	formulario.addEventListener("submit", validaFormulario)
	formulario.CPF.addEventListener("keypress", mascaraCPF);
	formulario.telefone.addEventListener("keypress", mascaraFone);
}

function mascaraCPF(event){
	
	if(event.keyCode < 48 || event.keyCode > 57){
		event.preventDefault();
	}
	if(this.value.length == 3){
		this.value = this.value + ".";
	}
	if(this.value.length == 7){
		this.value = this.value + ".";
	}
		if(this.value.length == 11){
		this.value = this.value + "-";
	}
	if(this.value.length >= 14){
		alert("CAMPO CPF TOTALMENTE PREENCHIDO")
		event.preventDefault();
	}
}

function validaFormulario(event){
	let formulario = document.getElementById("cadastro")
	const numElementos = formulario.elements.length
	let submeter=true
	for(let i=0; i < numElementos; i++){
		let controle = formulario.elements[i];
		
		if(controle.value==""){
			controle.style.border="1px solid red"
			submeter=false
			alert(controle.id)
		}
	}
		if(submeter==false){
			alert('Preencher Campos Obrigatórios')
			event.preventDefault()
		}
}
window.onload = function () {

    const paginas = document.querySelectorAll(".alteraPagina") //seleciona todas as classes .alteraPagina
    paginas.forEach(pagina => {     // para cada página...
    pagina.addEventListener("click", trocaPagina) // para cada .alteraPagina  acontece o evento click, então chama trocaPagina
    });
}

function trocaPagina(event) {
    event.preventDefault()

     let pagina=event.target.href
     fetch(pagina)


      .then(function(response){
        if(response.ok)
            return response.text()

    })
    .then(function(dados){

              if(dados) {
                     var x = document.getElementById("carrega")
                     var conteudo = dados
                     var x2 = document.getElementById("carrega2")
                     x2.innerHTML = ''
                     if(conteudo) {
                       x.innerHTML = conteudo
                       var cadastro = document.getElementById("formCadastro")
                       cadastro.addEventListener("submit", crudUsuario)
             }
         }


     })     
    .catch(function(e) {
        console.log(e)
    })

}
function crudUsuario(event) {
    event.preventDefault()
    let formulario=event.target
    let formData = new FormData(formulario);
    const options = { method:'POST',
                      mode:'cors',
                      body: formData,
                      cache:'default'}

     let pagina="includes/logica/controller.php"

     fetch(pagina,options)

    .then(function(response){
        if(response.ok)
            return response.text()

    })
    .then(function(dados){

              if(dados) {
                var x = document.getElementById("carrega")
                var conteudo = dados

                if(conteudo) {
                    x.innerHTML = conteudo
                    }
                }


     })     
    .catch(function(e) {
        console.log(e)
    })
}


function pesquisaUsuarios(event) {
    let formulario=document.getElementById("formulario")
    let formData = new FormData(formulario);
    const options = { method:'POST',
                      mode:'cors',
                      body: formData,
                      cache:'default'}

     let pagina="includes/logica/controller.php"
     fetch(pagina,options)


      .then(function(response){
        if(response.ok)
            return response.text()

    })
    .then(function(dados){
              var x = document.getElementById("carrega2")
              if(dados) {
                         var conteudo = dados

                    if(conteudo) {
                        x.innerHTML = conteudo
                    }
                }


     })     
    .catch(function(e) {
        console.log(e)
    })

}

const config = {
    
};
function createConfig(){
    return  config
}

const widgetConfig = {
  "autosize": true,
  "symbol": "BINANCE:BTCUSDT",
  "interval": "D",
  "timezone": "Etc/UTC",
  "theme": "dark",
  "style": "1",
  "locale": "br",
  "allow_symbol_change": true,
  "watchlist": [
    "BITSTAMP:BTCUSD",
    "BINANCE:ETHUSDT",
    "BINANCE:SOLUSDT",
    "CRYPTOCAP:USDT.D",
    "BINANCE:MATICUSDT",
    "BINANCE:DOTUSDT",
    "BINANCE:NEARUSDT",
    "BINANCE:PEPEUSDT",
    "BINANCE:RUNEUSDT",
    "BINANCE:UNIUSDT",
    "COINBASE:AVAXUSD",
    "BINANCE:BNBUSDT",
    "BINANCE:XRPUSD"
  ],
  "calendar": false,
  "support_host": "https://www.tradingview.com"
}

// Converte o objeto em uma string JSON
const widgetConfigString = JSON.stringify(widgetConfig);

// Cria o elemento script dinamicamente
const script = document.createElement("script");
script.type = "text/javascript";
script.src = "https://s3.tradingview.com/external-embedding/embed-widget-advanced-chart.js";
script.async = true;

// Adiciona o conteúdo JSON como texto do script
script.text = widgetConfigString;

// Anexa o script ao container
const widgetContainer = document.querySelector(".tradingview-container1");
widgetContainer.appendChild(script);

function confirma_excluir()
{
    resp=confirm("Confirma Exclusão?")

    if (resp==true)
    {

        return true;
    }
    else
    {
        return false;

    }

}


