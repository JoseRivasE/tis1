console.log("holaaaaaaaaaaa");

function azul() {
    const eazul = document.getElementById("azul")
    eazul.style.backgroundColor = "blue";
}
function verde(){
    document.getElementsByClassName("verde")[0].style.backgroundColor = "green";
}
function reset(){
    const eazul = document.getElementById("azul")
    eazul.style.backgroundColor = "red";
    eazul.style.transform = 'rotate(90deg)';
}
function rotar(){
    const eazul = document.getElementById("azul")
    eazul.style.transform = 'rotate(135deg)';
}