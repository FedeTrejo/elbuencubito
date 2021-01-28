function MostrarUOcultarContraseña1(){
    var chb1 = document.getElementById('verContra1');
    password2 = document.getElementById("contras1");

    if(chb1.checked){
        password2.type = "text";
    }
    else{
        password2.type = "password";
    }
}
function mostrar(){
    elem = document.getElementById("button1");
    if(elem){
    elem.addEventListener("click", mostrarOcultar("infotext1", "r1", "d1"), true);
    }
}
function mostrar2(){
    elem = document.getElementById("button2");
    elem.addEventListener("click", mostrarOcultar("infotext2", "r2", "d2"), true);
}
function mostrar3(){
    elem = document.getElementById("button3");
    elem.addEventListener("click", mostrarOcultar("infotext3", "r3", "d3"), true);

}
function mostrar4(){
    elem = document.getElementById("button4");
    elem.addEventListener("click", mostrarOcultar("infotext4", "r4", "d4"), true);
}
function mostrar5(){
    elem = document.getElementById("button5");
    elem.addEventListener("click", mostrarOcultar("infotext5", "r5", "d5"), true);
}
function mostrar6(){
    elem = document.getElementById("button6");
    elem.addEventListener("click", mostrarOcultar("infotext6", "r6", "d6"), true);
}
function mostrarOcultar(id, r, d){
    if(document.getElementById(id).style.display=="none"){

        document.getElementById(id).style.display="block";
        document.getElementById(r).style.display="none";
        document.getElementById(d).style.display="inline";
    }else{
        document.getElementById(id).style.display="none";
        document.getElementById(r).style.display="inline";
        document.getElementById(d).style.display="none";
    }
}
