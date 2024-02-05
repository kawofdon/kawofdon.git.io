
var pontos = document.getElementById("value_point")
var pontos_text = pontos.textContent
var calc;
//convertendo texto para inteiro de "pontos"
var pontos_value = parseInt(pontos_text)



//progresso1
//preenchimento
var progresso1 = document.getElementById('progresso1')
if(pontos_value >= 10)
{
    progresso1.style.width = "100%"
    progresso1.style.backgroundColor = "green";
    
}
else
{
    calc = 10 / 100
    progresso1.style.width = pontos_value / calc + "%";
    //document.write(pontos_value / calc) 
}

//nveis de cor
if(pontos_value / calc <= 30)
{
    progresso1.style.backgroundColor = "red"
}
else if(pontos_value / calc >30 && pontos_value / calc < 99)
{
    progresso1.style.backgroundColor = "rgb(230, 196, 6)"
}

//progresso2
//preenchimento
var progresso2 = document.getElementById('progresso2')
if(pontos_value >= 15)
{
    progresso2.style.width = "100%"
    progresso2.style.backgroundColor = "green";
    
}
else
{
    calc = 15 / 100
    progresso2.style.width = pontos_value / calc + "%";
    //document.write(pontos_value / calc) 
}

//nveis de cor
if(pontos_value / calc <= 30)
{
    progresso2.style.backgroundColor = "red"
}
else if(pontos_value / calc >30 && pontos_value / calc < 99)
{
    progresso2.style.backgroundColor = "rgb(230, 196, 6)"
}

//progresso3
//preenchimento
var progresso3 = document.getElementById('progresso3')
if(pontos_value >= 40)
{
    progresso3.style.width = "100%"
    progresso3.style.backgroundColor = "green";
    
}
else
{
    calc = 40 / 100
    progresso3.style.width = pontos_value / calc + "%";
    //document.write(pontos_value / calc) 
}

//nveis de cor
if(pontos_value / calc <= 30)
{
    progresso3.style.backgroundColor = "red"
}
else if(pontos_value / calc >30 && pontos_value / calc < 99)
{
    progresso3.style.backgroundColor = "rgb(230, 196, 6)"
}