


//variaveis
var cupom = 0
var resto = 0
var kab = 10
var tera= 15
var mag= 40
var pontosatual =0

//variaveis já atribuidas


//document.write('ola')

//valores de troca para cupons


//funções de troca

//cupom kabum
function kabum()
{
    cupom=1

    var pontos = document.getElementById("value_point")
    var pontos_text = pontos.textContent

    //convertendo texto para inteiro de "pontos"
    var pontos_value = parseInt(pontos_text)

    pontosatual = pontos_value
    
    //valor do input que da send no valor restante de pontos
    var inputvalue = document.getElementById("send_point")

    var confirm = document.querySelector(".confirm");



    //document.write(pontos_value +2)
    if(pontos_value >= kab)
    {   
        resto = 0
        resto = pontos_value-kab;
        //document.write('resgatado com sucesso!')
        
        //document.write(pontos_value)
        inputvalue.value = resto

        confirm.style.display = "block";
        
       
    }
    else
    {
        var insuficiente = document.querySelector('.insuficiente')
        insuficiente.style.display = "block"
    }
    
}

function terabyte()
{
    cupom=2

    
    var pontos = document.getElementById("value_point")
    var pontos_text = pontos.textContent

    //convertendo texto para inteiro de "pontos"
    var pontos_value = parseInt(pontos_text)

    pontosatual = pontos_value

    //valor do input que da send no valor restante de pontos
    var inputvalue = document.getElementById("send_point")

    var confirm = document.querySelector(".confirm");

    


    //document.write(pontos_value +2)
    if(pontos_value >= tera)
    {   
        resto = 0
        resto = pontos_value-tera;
        //document.write('resgatado com sucesso!')
        
        //document.write(pontos_value)
        inputvalue.value = resto

        confirm.style.display = "block";
    }
    else
    {
        var insuficiente = document.querySelector('.insuficiente')
        insuficiente.style.display = "block"
    }
    
}

function magalu()
{
    cupom=3

    
    var pontos = document.getElementById("value_point")
    var pontos_text = pontos.textContent

    //convertendo texto para inteiro de "pontos"
    var pontos_value = parseInt(pontos_text)

    pontosatual = pontos_value

    //valor do input que da send no valor restante de pontos
    var inputvalue = document.getElementById("send_point")

    var confirm = document.querySelector(".confirm");

    


    //document.write(pontos_value +2)
    if(pontos_value >= mag)
    {   
        resto = 0
        resto = pontos_value-mag;
        //document.write('resgatado com sucesso!')
        
        //document.write(pontos_value)
        inputvalue.value = resto

        confirm.style.display = "block";
       
    }
    else
    {
        var insuficiente = document.querySelector('.insuficiente')
        insuficiente.style.display = "block"

    }
    
}

function resgatar()
{
   
    var confirm = document.querySelector(".confirm");
    confirm.style.display = "none";

    var sucesso = document.querySelector('.sucesso')
    sucesso.style.display = "block"

   

    if(cupom == 1)
    {
        var pontos = document.getElementById("value_point")
        pontos.innerHTML = pontosatual - kab
        
    }

    if(cupom == 2)
    {
        var pontos = document.getElementById("value_point")
        pontos.innerHTML = pontosatual-tera
    }
    

    if(cupom == 3)
    {
        var pontos = document.getElementById("value_point")
        pontos.innerHTML = pontosatual-mag
    }


    var codigoAscii = Math.floor(Math.random() * (90 - 65 + 1)) + 65;
    var letraAleatoria = String.fromCharCode(codigoAscii);


    var numeroAleatorio1 = Math.floor(Math.random() * 9) + 1;
    var numeroAleatorio2 = Math.floor(Math.random() * 9) + 1;
    var numeroAleatorio3 = Math.floor(Math.random() * 200) + 100;
    var codigo = document.getElementById("code")
    codigo.innerHTML = numeroAleatorio1 + numeroAleatorio2 + numeroAleatorio3 + letraAleatoria
}

function fechar_insuficiente()
{
    var insuficiente = document.querySelector('.insuficiente')
    insuficiente.style.display = "none"
}

function fechar_sucesso()
{
    var insuficiente = document.querySelector('.sucesso')
    insuficiente.style.display = "none"
}

//cancelar troca
function cancel_kabum()
{
    //document.write('ola')
    var pontos_value = parseInt(pontos_text)
    var inputvalue = document.getElementById("send_point")
    var confirm = document.querySelector(".confirm");
    
    inputvalue.value = pontos_value;
    confirm.style.display = "none";


}