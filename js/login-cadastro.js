
var loginForm = document.getElementById('loginForm');
var cadastroForm = document.getElementById('cadastroForm');

window.onload = function() {
    loginForm.style.display = 'block';
    cadastroForm.style.display = 'none';
};

function showCadastroForm() {
    loginForm.style.display = 'none';
    cadastroForm.style.display = 'block';
}

function showLoginForm() {
    loginForm.style.display = 'block';
    cadastroForm.style.display = 'none';
}

function mascaraCpf(mascara, input){
    const vetMask = mascara.split("") //Separar a máscara em campos vazios
    const numCpf = input.value.replace(/\D/g,"")
    const cursor = input.selectionStart
    const tecla = (window.event) ? event.keyCode : event.which

    for(let i=0; i<numCpf.length; i++){
        vetMask.splice(vetMask.indexOf("_"), 1, numCpf[i])
    }

    input.value = vetMask.join("")

    if(tecla != 37 && (cursor == 3 || cursor == 7 || cursor == 11)){
        input.setSelectionRange(cursor+1, cursor+1)
    }else{
        input.setSelectionRange(cursor, cursor)
    }

}
    

