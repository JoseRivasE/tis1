function rotar() {
    const cuadrado = document.getElementsByClassName("cuadrado")[0];
    cuadrado.classList.toggle("rotar");
}

var uno = $("#uno").val();
var dos = $("#dos").val();


function sumar() {
    var total = parseFloat(uno)+parseFloat(dos);
    console.log("suma: ",total);
}

function restar() {
    var uno = $("#uno").val();
    var dos = $("#dos").val();
    var total = parseFloat(uno)-parseFloat(dos);
    console.log("resta: ",total);
}

function multiplicar() {
    var uno = $("#uno").val();
    var dos = $("#dos").val();
    var total = parseFloat(uno)*parseFloat(dos);
    console.log("mult.: ",total);
}

function dividir() {
    var uno = $("#uno").val();
    var dos = $("#dos").val();
    var total = parseFloat(uno)/parseFloat(dos);
    console.log("div.: ",total);
}