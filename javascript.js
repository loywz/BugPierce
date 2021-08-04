
/*Empresa - Especialista*/

var direita = document.getElementById("mudar-direita")
var esquerda = document.getElementById("mudar-esquerda")

var mudarDireitaEspecialista = document.getElementById("mudar-direita-especialista")
var mudarEsquerdaEspecialista = document.getElementById("mudar-esquerda-especialista")



function mudarDireita(){
    var empresa = document.getElementById('empresa-desc')
    empresa.style.display = "none";

    var especialista = document.getElementById('especialista-desc')
    especialista.style.display = "flex";
}

function mudarEsquerda(){
    var especialista = document.getElementById('especialista-desc')
    especialista.style.display = "none";

    var empresa = document.getElementById('empresa-desc')
    empresa.style.display = "flex"
}

mudarDireitaEspecialista.addEventListener('click', mudarEsquerda)
mudarEsquerdaEspecialista.addEventListener('click', mudarEsquerda)

direita.addEventListener('click', mudarDireita)
esquerda.addEventListener('click', mudarEsquerda)




