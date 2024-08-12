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

     let pagina="includes/controle.php"

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

     let pagina="includes/controle.php"
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