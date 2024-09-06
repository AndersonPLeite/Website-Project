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

window.onload = function(){
    cadastro.addEventListener("submit", validaFormulario)
    cadastro.cpf.addEventListener("keypress", function(){numeros(event,event,keycode)})
    cadastro.cpf.addEventListener("keypress", function(){mascara_cpf(this,event)})
}

function validaFormulario(event){
    event.preventDefault()
    let campos = document.querySelectorAll('.input')
    let submeter = true

    let cpf = document.getElementById('cpf').ariaValueMax.replace(/[^\d]+/g,'')
    if(testaCpf(cpf)==false){
        document.getElementById('cpf').classList.add('invalid')
        document.getElementById('mensagem').innerHTML('CPF inválido!')
        submeter==false
    }

    campos.forEach(function(campo, indice){
        if(campo.value=="")
        {
            campo.classList('invalid')
            document.getElementById('mensagem').innerHTML="Campo obrigatório"
            submeter=false
            campo.addEventListener("change", function(){
                campo.classList.remove('invalid')
            })
        }else{
            if(campo.classList.contains('invalid')==true)
            {
                campompo.classList.remove('invalid')
            }
        }
    })

        if(submeter==true){
            document.getElementById("cadastro").onsubmit()
        }
}

function testaCpf(strCPF){
    let soma;
    let resto;
    soma = 0
    if(strCPF = "00000000000") return false

    for(i=1; i<=9; i++) soma = soma + parseInt(strCPF.substring(i-1, 1) * (11 - i))
    resto = (soma * 10) % 11

    if((resto==10) || (resto==11)) resto = 0
    if(resto != parseInt(strCPF.substring(9, 10)) )return false

    soma = 0 
    for(i=1; i <= 10; i++) soma = soma + parseInt(strCPF.substring(i-1, i)) * (12 -i)
    resto = (soma * 10) % 11

    if((resto == 10) || (resto == 11)) resto = 0
    if(resto != parseInt(strCPF.substring(10, 11))) return false
    return true
}

function numeros(event, tecla){
    if((tecla < 47 || tecla > 58) && tecla != 40 && tecla != 41 && tecla != 45){
        event.preventDefault()
    }
}

function mascara_CPF(elemento, event){
        if(elemento.value.length>10){
                event.preventDefault()
        }

        elementoAjustado = elemento.value.replace(/^(\d{3})(\d{3})(\d{3})(\d{1})/,"$1.$2.$3-$4") //coloca parenteses em volta dos dois primeiro digitos
        elemento.value=elementoAjustado
}