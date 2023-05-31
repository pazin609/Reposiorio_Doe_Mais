
var radio = document.querySelector('.manual-btn');
var cont = 1;

document.getElementById('radio1').checked = true;

setInterval(() => {
    proximaImg();
}, 2500);

function proximaImg(){
    cont += 0.5;

    if(cont > 4){
        cont = 1;
    }

document.getElementById('radio'+cont).checked = true;
}
