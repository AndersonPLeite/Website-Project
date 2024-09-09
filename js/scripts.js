/*window.onload = function(){
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
}*/
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


const widgetConfigIbov = {
    "width": "950",
    "height": "600",
    "symbolsGroups": [
      {
        "name": "Bonds",
        "originalName": "Bonds",
        "symbols": [
          {
            "name": "BMFBOVESPA:VALE3"
          },
          {
            "name": "BMFBOVESPA:SUZB3"
          },
          {
            "name": "BMFBOVESPA:PETR4"
          },
          {
            "name": "BMFBOVESPA:BBAS3"
          },
          {
            "name": "BMFBOVESPA:CSAN3"
          },
          {
            "name": "BMFBOVESPA:BEEF3"
          },
          {
            "name": "BMFBOVESPA:AZUL4"
          },
          {
            "name": "BMFBOVESPA:MGLU3"
          },
          {
            "name": "BMFBOVESPA:INBR32"
          },
          {
            "name": "BMFBOVESPA:B3SA3"
          },
          {
            "name": "BMFBOVESPA:WEGE3"
          },
          {
            "name": "BMFBOVESPA:ITUB4"
          },
          {
            "name": "BMFBOVESPA:BRFS3"
          },
          {
            "name": "BMFBOVESPA:ELET6"
          },
          {
            "name": "BMFBOVESPA:BBDC4"
          },
          {
            "name": "BMFBOVESPA:ABEV3"
          },
          {
            "name": "BMFBOVESPA:JBSS3"
          },
          {
            "name": "BMFBOVESPA:CXSE3"
          },
          {
            "name": "BMFBOVESPA:ELET6"
          },
          {
            "name": "BMFBOVESPA:ELET3"
          },
          {
            "name": "BMFBOVESPA:NIKE34"
          },
          {
            "name": "BMFBOVESPA:LREN3"
          },
          {
            "name": "BMFBOVESPA:CMIG4"
          },
          {
            "name": "BMFBOVESPA:RAIZ4"
          },
          {
            "name": "BMFBOVESPA:GGBR4"
          },
          {
            "name": "BMFBOVESPA:ITSA4"
          },
          {
            "name": "BMFBOVESPA:EGIE3"
          },
          {
            "name": "BMFBOVESPA:EMBR3"
          },
          {
            "name": "BMFBOVESPA:USIM5"
          },
          {
            "name": "BMFBOVESPA:KLBN4"
          },
          {
            "name": "BMFBOVESPA:MULT3"
          },
          {
            "name": "BMFBOVESPA:ROXO34"
          },
          {
            "name": "BMFBOVESPA:BRKM5"
          },
          {
            "name": "BMFBOVESPA:SLCE3"
          },
          {
            "name": "BMFBOVESPA:TIMS3"
          },
          {
            "name": "BMFBOVESPA:FLRY3"
          },
          {
            "name": "BMFBOVESPA:PETZ3"
          },
          {
            "name": "BMFBOVESPA:POMO4"
          },
          {
            "name": "BMFBOVESPA:ITSA3"
          },
          {
            "name": "BMFBOVESPA:TASA4"
          },
          {
            "name": "BMFBOVESPA:ITUB3"
          },
          {
            "name": "BMFBOVESPA:CRFB3"
          },
          {
            "name": "BMFBOVESPA:TEND3"
          },
          {
            "name": "BMFBOVESPA:EQTL3"
          },
          {
            "name": "BMFBOVESPA:PSSA3"
          },
          {
            "name": "BMFBOVESPA:CASH3"
          },
          {
            "name": "BMFBOVESPA:MSFT34"
          },
          {
            "name": "BMFBOVESPA:GOGL34"
          },
          {
            "name": "BMFBOVESPA:SANB4"
          }
        ]
      }
    ],
    "showSymbolLogo": true,
    "isTransparent": true,
    "colorTheme": "dark",
    "locale": "br"
  }

  document.addEventListener('DOMContentLoaded', function(){
    var tradingviewwidgetcontainer = document.querySelector('.tradingviewIbov')
        if(tradingviewwidgetcontainer){
                console.log("Hello")
                const widgetConfigString = JSON.stringify(widgetConfigIbov);
                
                const script = document.createElement("script");
                script.type = "text/javascript";
                script.src = "https://s3.tradingview.com/external-embedding/embed-widget-market-quotes.js";
                script.async = true;
                
                
                script.text = widgetConfigString;
                
                
                const widgetContainerIbov = document.querySelector(".tradingviewIbov");
                widgetContainerIbov.appendChild(script);
        }else{
                console.error('Element with class "tradingview-container-Ibov" not found.');
    }
    
  })
  

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


