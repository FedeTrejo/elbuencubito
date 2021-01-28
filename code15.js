function mostrarInfo1(){
    var el = document.getElementById("boton1h");
    if(el){
    el.addEventListener("click", mostrarCont("contenedor1h"), desaparecerCont("contenedor2h"), 
    desaparecerCont("contenedor3h"), desaparecerCont("contenedor4h"), 
    desaparecerCont("contenedor5h"), llevarAtras("title2h"), llevarAtras("title3h"), llevarAtras("title4h"), llevarAtras("title5h"),true);
    }
    selected("title1h");
    diSelected("title2h");
    diSelected("title3h");
    diSelected("title4h");
    diSelected("title5h");
}
function mostrarInfo2(){
    var el = document.getElementById("boton2h");
    if(el){
    el.addEventListener("click", desaparecerCont("contenedor1h"), mostrarCont("contenedor2h"), 
    desaparecerCont("contenedor3h"), desaparecerCont("contenedor4h"), 
    desaparecerCont("contenedor5h"), llevarAtras("title3h"), llevarAtras("title4h"), llevarAtras("title5h"), llevarAdelante("title2h"), true);
    }
    diSelected("title1h");
    selected("title2h");
    diSelected("title3h");
    diSelected("title4h");
    diSelected("title5h");
}
function mostrarInfo3(){
    var el = document.getElementById("boton3h");
    if(el){
    el.addEventListener("click", desaparecerCont("contenedor1h"), desaparecerCont("contenedor2h"), 
    mostrarCont("contenedor3h"), desaparecerCont("contenedor4h"), 
    desaparecerCont("contenedor5h"), llevarAtras("title2h"), llevarAtras("title4h"), llevarAtras("title5h"),  llevarAdelante("title3h"), true);
    }
    diSelected("title1h");
    diSelected("title2h");
    selected("title3h");
    diSelected("title4h");
    diSelected("title5h");
}
function mostrarInfo4(){
    var el = document.getElementById("boton4h");
    if(el){
    el.addEventListener("click", desaparecerCont("contenedor1h"), desaparecerCont("contenedor2h"), 
    desaparecerCont("contenedor3h"), mostrarCont("contenedor4h"), 
    desaparecerCont("contenedor5h"), llevarAtras("title2h"), llevarAtras("title3h"), llevarAtras("title5h"),  llevarAdelante("title4h"), true);
    }
    diSelected("title1h");
    diSelected("title2h");
    diSelected("title3h");
    selected("title4h");
    diSelected("title5h");
}
function mostrarInfo5(){
    var el = document.getElementById("boton5h");
    if(el){
    el.addEventListener("click", desaparecerCont("contenedor1h"), desaparecerCont("contenedor2h"), 
    desaparecerCont("contenedor3h"), desaparecerCont("contenedor4h"), 
    mostrarCont("contenedor5h"),  llevarAtras("title4h"), llevarAtras("title3h"), llevarAtras("title2h"), llevarAdelante("title5h"), true);
    }
    diSelected("title1h");
    diSelected("title2h");
    diSelected("title3h");
    diSelected("title4h");
    selected("title5h");
}
function desaparecerCont(id){
    document.getElementById(id).style.display="none";
}
function llevarAtras(id){
    document.getElementById(id).style.zIndex = 25;
}
function mostrarCont(id){
    document.getElementById(id).style.display="inline-block";
}
function llevarAdelante(id){
    document.getElementById(id).style.zIndex = 75;
}
function selected(title){
    document.getElementById(title).style.background= "#eee";
    document.getElementById(title).style.color= "rgb(149, 56, 20)";
    document.getElementById(title).style.fontSize = "18px";
    document.getElementById(title).style.borderTop= "4px solid rgb(253, 170, 137)";

}
function diSelected(title){
    document.getElementById(title).style.background= "rgb(217, 88, 38)";
    document.getElementById(title).style.color= "#eee";
    document.getElementById(title).style.fontSize = "15px";
    document.getElementById(title).style.borderTop= "4px solid #eee";
}
//---------------------------------------------------------------------------------------------------------------
function mostrarCuadroAdd1(){
    var icon = document.getElementById("agregarCuadro1").style.display="block";
    if(icon){
        location.href= "#popup1";
        document.getElementById("popup1").style.visibility="visible";
        llevarAtras("title1h");
        icon.addEventListener("click",document.getElementById("cuadroAdd1").style.display="block",true)
    
    }
}
function mostrarCuadroAdd2(){
    var icon = document.getElementById("agregarCuadro2").style.display="block";
    if(icon){
        location.href= "#popup2";
        document.getElementById("popup2").style.visibility="visible";
        llevarAtras("title2h");
        icon.addEventListener("click",document.getElementById("cuadroAdd2").style.display="block",true)
    
    }
}
function mostrarCuadroAdd3(){
    var icon = document.getElementById("agregarCuadro3").style.display="block";
    if(icon){
        location.href= "#popup3";
        document.getElementById("popup3").style.visibility="visible";
        llevarAtras("title3h");
        icon.addEventListener("click",document.getElementById("cuadroAdd3").style.display="block",true)
    
    }
}
function mostrarCuadroAdd4(){
    var icon = document.getElementById("agregarCuadro4").style.display="block";
    if(icon){
        location.href= "#popup4";
        document.getElementById("popup4").style.visibility="visible";
        llevarAtras("title4h");
        icon.addEventListener("click",document.getElementById("cuadroAdd4").style.display="block",true)
    
    }
}
function mostrarCuadroAdd5(){
    var icon = document.getElementById("agregarCuadro5").style.display="block";
    if(icon){
        location.href= "#popup5";
        document.getElementById("popup5").style.visibility="visible";
        llevarAtras("title5h");
        icon.addEventListener("click",document.getElementById("cuadroAdd5").style.display="block",true)
    
    }
}
function closecuadroAdd1(){
    var cerrar = document.getElementById("cerrarcuadroAdd1");
    if(cerrar){
        var element = document.getElementById("cuadroAdd1")
        document.getElementById("popup1").style.visibility="hidden";
        element.style.display="none";
        document.getElementById("title1h").style.zIndex=57;
    }
}
function closecuadroAdd2(){
    var cerrar = document.getElementById("cerrarcuadroAdd2");
    if(cerrar){
        var element = document.getElementById("cuadroAdd2")
        document.getElementById("popup2").style.visibility="hidden";
        element.style.display="none";
        llevarAdelante("title2h");
    }
}
function closecuadroAdd3(){
    var cerrar = document.getElementById("cerrarcuadroAdd3");
    if(cerrar){
        var element = document.getElementById("cuadroAdd3")
        document.getElementById("popup3").style.visibility="hidden";
        element.style.display="none";
        llevarAdelante("title3h");
    }
}
function closecuadroAdd4(){
    var cerrar = document.getElementById("cerrarcuadroAdd4");
    if(cerrar){
        var element = document.getElementById("cuadroAdd4")
        document.getElementById("popup4").style.visibility="hidden";
        element.style.display="none";
        llevarAdelante("title4h");
    }
}
function closecuadroAdd5(){
    var cerrar = document.getElementById("cerrarcuadroAdd5");
    if(cerrar){
        var element = document.getElementById("cuadroAdd5")
        document.getElementById("popup5").style.visibility="hidden";
        element.style.display="none";
        llevarAdelante("title5h");
    }
}
//_------------------------------------------------------------------------------------------------------------------------
var contenido1 = [];
var autores1 = [];
var n1 = 0;
function abrirInterfaz1(id1){
    var contenedor1 = document.getElementById(id1);
    if(contenedor1){

    var fotos1 = document.getElementsByClassName("foto1");
    contenido1 = [];
    var at1 = document.getElementsByClassName("autor1");
    autores1 = [];
    for(var i1 = 0; i1 < fotos1.length; i1++){
        contenido1.push(fotos1[i1]);
    }

    for(var i1 = 0; i1 < at1.length; i1++){
        autores1.push(at1[i1]);
    }
    console.log(autores1);
    console.log(contenido1);
    if(contenido1.length > 0){
    contenedor1.addEventListener("click", showImage1(contenido1),true);
    }
    }
}
function showImage1(contenido1){
    n1 = 0;

    location.href= "#popup1";
    document.getElementById("popup1").style.visibility="visible";
    llevarAtras("title1h");

    contenido1[n1].style.position="fixed";
    contenido1[n1].style.width="50vw";
    contenido1[n1].style.top="0";
    contenido1[n1].style.bottom="0";
    contenido1[n1].style.marginTop="auto";
    contenido1[n1].style.marginBottom="auto";
    contenido1[n1].style.left="0";
    contenido1[n1].style.right="0";
    contenido1[n1].style.marginLeft="auto";
    contenido1[n1].style.marginRight="auto";

    document.getElementById("cerrar1").style.visibility="visible";
    document.getElementById("cerrar1").style.position="absolute";
    document.getElementById("cerrar1").style.top="70px";
    document.getElementById("cerrar1").style.right="2%";
    document.getElementById("cerrar1").style.color="white";
    document.getElementById("cerrar1").style.fontSize="40px";
    document.getElementById("cerrar1").style.fontWeight="bold";
    document.getElementById("cerrar1").style.textDecoration="none";
    document.getElementById("cerrar1").style.transition="all 200ms";

    if(n1 > 0){
        document.getElementById("volver1").style.visibility="visible";
        document.getElementById("volver1").style.position="absolute";
        document.getElementById("volver1").style.top="45%";
        document.getElementById("volver1").style.right="96%";
        document.getElementById("volver1").style.color="white";
        document.getElementById("volver1").style.fontSize="40px";
        document.getElementById("volver1").style.fontWeight="bold";
        document.getElementById("volver1").style.textDecoration="none";
        document.getElementById("volver1").style.transition="all 200ms";
    }
    console.log(n1);
    console.log(contenido1.length);

    if(n1 + 1 === contenido1.length){
        document.getElementById("seguir1").style.visibility="hidden";
    }else{
        document.getElementById("seguir1").style.visibility="visible";
        document.getElementById("seguir1").style.position="absolute";
        document.getElementById("seguir1").style.top="45%";
        document.getElementById("seguir1").style.right="2%";
        document.getElementById("seguir1").style.color="white";
        document.getElementById("seguir1").style.fontSize="40px";
        document.getElementById("seguir1").style.fontWeight="bold";
        document.getElementById("seguir1").style.textDecoration="none";
        document.getElementById("seguir1").style.transition="all 200ms";
    }

    document.getElementById("autor1").style.visibility="visible";
    document.getElementById("autor1").innerHTML="Por "+ autores1[n1].innerHTML;
    document.getElementById("autor1").style.position="absolute";
    document.getElementById("autor1").style.bottom="15%";
    document.getElementById("autor1").style.right="13%";
    document.getElementById("autor1").style.color="#ddd";
    document.getElementById("autor1").style.fontSize="20px";
    document.getElementById("autor1").style.textDecoration="none";
    document.getElementById("autor1").style.transition="all 200ms ease 0s";

}
function closeImage1(imagen){
    document.getElementById("popup1").style.visibility="hidden";
    document.getElementById("cerrar1").style.visibility="hidden";
    document.getElementById("volver1").style.visibility="hidden";
    document.getElementById("seguir1").style.visibility="hidden";
    document.getElementById("autor1").style.visibility="hidden";
    contenido1[n1].style.position="unset";
    document.getElementById("title1h").style.zIndex=57;
}
function previousImage1(){
    contenido1[n1].style.position="unset";

    n1--;

    contenido1[n1].style.position="fixed";
    contenido1[n1].style.width="50vw";
    contenido1[n1].style.top="0";
    contenido1[n1].style.bottom="0";
    contenido1[n1].style.marginTop="auto";
    contenido1[n1].style.marginBottom="auto";
    contenido1[n1].style.left="0";
    contenido1[n1].style.right="0";
    contenido1[n1].style.marginLeft="auto";
    contenido1[n1].style.marginRight="auto";

    if(n1 > 0){
        document.getElementById("volver1").style.visibility="visible";
    }
    
    if(n1 === 0){
        document.getElementById("volver1").style.visibility="hidden";
    }

    console.log(n1);
    console.log(contenido1.length);

    if(n1 <= contenido1.length-1){
        document.getElementById("seguir1").style.visibility="visible";
    }
    if(n1 > contenido1.length){
        document.getElementById("seguir1").style.visibility="hidden";
    }

    document.getElementById("autor1").innerHTML="Por "+ autores1[n1].innerHTML;
}
function nextImage1(){
    contenido1[n1].style.position="unset";

    n1++;

    contenido1[n1].style.position="fixed";
    contenido1[n1].style.width="50vw";
    contenido1[n1].style.top="0";
    contenido1[n1].style.bottom="0";
    contenido1[n1].style.marginTop="auto";
    contenido1[n1].style.marginBottom="auto";
    contenido1[n1].style.left="0";
    contenido1[n1].style.right="0";
    contenido1[n1].style.marginLeft="auto";
    contenido1[n1].style.marginRight="auto";

    if(n1 > 0){
        document.getElementById("volver1").style.visibility="visible";
        document.getElementById("volver1").style.position="absolute";
        document.getElementById("volver1").style.top="45%";
        document.getElementById("volver1").style.right="96%";
        document.getElementById("volver1").style.color="white";
        document.getElementById("volver1").style.fontSize="40px";
        document.getElementById("volver1").style.fontWeight="bold";
        document.getElementById("volver1").style.textDecoration="none";
        document.getElementById("volver1").style.transition="all 200ms";
    }
    console.log(n1);
    console.log(contenido1.length);
    if(n1 === contenido1.length-1){
        document.getElementById("seguir1").style.visibility="hidden";
    }else{
        document.getElementById("seguir1").style.visibility="visible";
        document.getElementById("seguir1").style.position="absolute";
        document.getElementById("seguir1").style.top="45%";
        document.getElementById("seguir1").style.right="2%";
        document.getElementById("seguir1").style.color="white";
        document.getElementById("seguir1").style.fontSize="40px";
        document.getElementById("seguir1").style.fontWeight="bold";
        document.getElementById("seguir1").style.textDecoration="none";
        document.getElementById("seguir1").style.transition="all 200ms";
    }
    document.getElementById("autor1").innerHTML="Por "+ autores1[n1].innerHTML;
}

//----------------------------------------------------------------------------------------------------------------
var contenido = [];
var autores = [];
var n = 0;
function abrirInterfaz2(id){
    var contenedor = document.getElementById(id);
    if(contenedor){

    var fotos = document.getElementsByClassName("foto2");
    contenido = [];

    var at = document.getElementsByClassName("autor2");
    autores = [];

    for(var i = 0; i < at.length; i++){
        autores.push(at[i]);
    }

    console.log(autores);

    for(var i = 0; i < fotos.length; i++){
        contenido.push(fotos[i]);
    }

    console.log(contenido);
    if(contenido.length > 0){
    contenedor.addEventListener("click", showImage(contenido),true);
    }
    }
}
function showImage(contenido){
    n = 0;

    location.href= "#popup2";
    document.getElementById("popup2").style.visibility="visible";
    llevarAtras("title2h");

    contenido[n].style.position="fixed";
    contenido[n].style.width="50vw";
    contenido[n].style.top="0";
    contenido[n].style.bottom="0";
    contenido[n].style.marginTop="auto";
    contenido[n].style.marginBottom="auto";
    contenido[n].style.left="0";
    contenido[n].style.right="0";
    contenido[n].style.marginLeft="auto";
    contenido[n].style.marginRight="auto";

    document.getElementById("cerrar2").style.visibility="visible";
    document.getElementById("cerrar2").style.position="absolute";
    document.getElementById("cerrar2").style.top="70px";
    document.getElementById("cerrar2").style.right="2%";
    document.getElementById("cerrar2").style.color="white";
    document.getElementById("cerrar2").style.fontSize="40px";
    document.getElementById("cerrar2").style.fontWeight="bold";
    document.getElementById("cerrar2").style.textDecoration="none";
    document.getElementById("cerrar2").style.transition="all 200ms";

    if(n > 0){
        document.getElementById("volver2").style.visibility="visible";
        document.getElementById("volver2").style.position="absolute";
        document.getElementById("volver2").style.top="45%";
        document.getElementById("volver2").style.right="96%";
        document.getElementById("volver2").style.color="white";
        document.getElementById("volver2").style.fontSize="40px";
        document.getElementById("volver2").style.fontWeight="bold";
        document.getElementById("volver2").style.textDecoration="none";
        document.getElementById("volver2").style.transition="all 200ms";
    }

    if(n === contenido.length-1){
        document.getElementById("seguir2").style.visibility="hidden";
    }else{
        document.getElementById("seguir2").style.visibility="visible";
        document.getElementById("seguir2").style.position="absolute";
        document.getElementById("seguir2").style.top="45%";
        document.getElementById("seguir2").style.right="2%";
        document.getElementById("seguir2").style.color="white";
        document.getElementById("seguir2").style.fontSize="40px";
        document.getElementById("seguir2").style.fontWeight="bold";
        document.getElementById("seguir2").style.textDecoration="none";
        document.getElementById("seguir2").style.transition="all 200ms";
    }

    document.getElementById("autor2").style.visibility="visible";
    document.getElementById("autor2").innerHTML="Por "+ autores[n].innerHTML;
    document.getElementById("autor2").style.position="absolute";
    document.getElementById("autor2").style.bottom="15%";
    document.getElementById("autor2").style.right="13%";
    document.getElementById("autor2").style.color="#ddd";
    document.getElementById("autor2").style.fontSize="20px";
    document.getElementById("autor2").style.textDecoration="none";
    document.getElementById("autor2").style.transition="all 200ms ease 0s";
}
function closeImage(imagen){
    document.getElementById("popup2").style.visibility="hidden";
    document.getElementById("cerrar2").style.visibility="hidden";
    document.getElementById("volver2").style.visibility="hidden";
    document.getElementById("seguir2").style.visibility="hidden";
    document.getElementById("autor2").style.visibility="hidden";
    contenido[n].style.position="unset";
    llevarAdelante("title2h");
}
function previousImage(){
    contenido[n].style.position="unset";

    n--;

    contenido[n].style.position="fixed";
    contenido[n].style.width="50vw";
    contenido[n].style.top="0";
    contenido[n].style.bottom="0";
    contenido[n].style.marginTop="auto";
    contenido[n].style.marginBottom="auto";
    contenido[n].style.left="0";
    contenido[n].style.right="0";
    contenido[n].style.marginLeft="auto";
    contenido[n].style.marginRight="auto";

    if(n > 0){
        document.getElementById("volver2").style.visibility="visible";

    }
    
    if(n === 0){
        document.getElementById("volver2").style.visibility="hidden";
    }

    console.log(n);
    console.log(contenido.length);

    if(n <= contenido.length-1){
        document.getElementById("seguir2").style.visibility="visible";

    }
    if(n > contenido.length){
        document.getElementById("seguir2").style.visibility="hidden";
    }

    document.getElementById("autor2").innerHTML="Por "+ autores[n].innerHTML;
}
function nextImage(){
    contenido[n].style.position="unset";

    n++;

    contenido[n].style.position="fixed";
    contenido[n].style.width="50vw";
    contenido[n].style.top="0";
    contenido[n].style.bottom="0";
    contenido[n].style.marginTop="auto";
    contenido[n].style.marginBottom="auto";
    contenido[n].style.left="0";
    contenido[n].style.right="0";
    contenido[n].style.marginLeft="auto";
    contenido[n].style.marginRight="auto";

    if(n > 0){
        document.getElementById("volver2").style.visibility="visible";
        document.getElementById("volver2").style.position="absolute";
        document.getElementById("volver2").style.top="45%";
        document.getElementById("volver2").style.right="96%";
        document.getElementById("volver2").style.color="white";
        document.getElementById("volver2").style.fontSize="40px";
        document.getElementById("volver2").style.fontWeight="bold";
        document.getElementById("volver2").style.textDecoration="none";
        document.getElementById("volver2").style.transition="all 200ms";
    }
    console.log(n);
    console.log(contenido.length);
    if(n === contenido.length-1){
        document.getElementById("seguir2").style.visibility="hidden";
    }else{
        document.getElementById("seguir2").style.visibility="visible";
        document.getElementById("seguir2").style.position="absolute";
        document.getElementById("seguir2").style.top="45%";
        document.getElementById("seguir2").style.right="2%";
        document.getElementById("seguir2").style.color="white";
        document.getElementById("seguir2").style.fontSize="40px";
        document.getElementById("seguir2").style.fontWeight="bold";
        document.getElementById("seguir2").style.textDecoration="none";
        document.getElementById("seguir2").style.transition="all 200ms";
    }

    document.getElementById("autor2").innerHTML="Por "+ autores[n].innerHTML;
}

//--------------------------------------------------------------------------------------------------

var contenido3 = [];
var autores3 = [];
var n3 = 0;
function abrirInterfaz3(id3){
    var contenedor3 = document.getElementById(id3);
    if(contenedor3){

    var fotos3 = document.getElementsByClassName("foto3");
    contenido3 = [];

    var at3 = document.getElementsByClassName("autor3");
    autores3 = [];

    for(var i3 = 0; i3 < at3.length; i3++){
        autores3.push(at3[i3]);
    }

    console.log(autores3);


    for(var i3 = 0; i3 < fotos3.length; i3++){
        contenido3.push(fotos3[i3]);
    }

    console.log(contenido3);
    if(contenido3.length > 0){
    contenedor3.addEventListener("click", showImage3(contenido3),true);
    }
    }
}
function showImage3(contenido3){
    n3 = 0;

    location.href= "#popup3";
    document.getElementById("popup3").style.visibility="visible";
    llevarAtras("title3h");

    contenido3[n3].style.position="fixed";
    contenido3[n3].style.width="50vw";
    contenido3[n3].style.top="0";
    contenido3[n3].style.bottom="0";
    contenido3[n3].style.marginTop="auto";
    contenido3[n3].style.marginBottom="auto";
    contenido3[n3].style.left="0";
    contenido3[n3].style.right="0";
    contenido3[n3].style.marginLeft="auto";
    contenido3[n3].style.marginRight="auto";

    document.getElementById("cerrar3").style.visibility="visible";
    document.getElementById("cerrar3").style.position="absolute";
    document.getElementById("cerrar3").style.top="70px";
    document.getElementById("cerrar3").style.right="2%";
    document.getElementById("cerrar3").style.color="white";
    document.getElementById("cerrar3").style.fontSize="40px";
    document.getElementById("cerrar3").style.fontWeight="bold";
    document.getElementById("cerrar3").style.textDecoration="none";
    document.getElementById("cerrar3").style.transition="all 200ms";

    if(n3 > 0){
        document.getElementById("volver3").style.visibility="visible";
        document.getElementById("volver3").style.position="absolute";
        document.getElementById("volver3").style.top="45%";
        document.getElementById("volver3").style.right="96%";
        document.getElementById("volver3").style.color="white";
        document.getElementById("volver3").style.fontSize="40px";
        document.getElementById("volver3").style.fontWeight="bold";
        document.getElementById("volver3").style.textDecoration="none";
        document.getElementById("volver3").style.transition="all 200ms";
    }
    console.log(n3);
    console.log(contenido3.length);

    if(n3 + 1 === contenido3.length){
        document.getElementById("seguir3").style.visibility="hidden";
    }else{
        document.getElementById("seguir3").style.visibility="visible";
        document.getElementById("seguir3").style.position="absolute";
        document.getElementById("seguir3").style.top="45%";
        document.getElementById("seguir3").style.right="2%";
        document.getElementById("seguir3").style.color="white";
        document.getElementById("seguir3").style.fontSize="40px";
        document.getElementById("seguir3").style.fontWeight="bold";
        document.getElementById("seguir3").style.textDecoration="none";
        document.getElementById("seguir3").style.transition="all 200ms";
    }

    document.getElementById("autor3").style.visibility="visible";
    document.getElementById("autor3").innerHTML="Por "+ autores3[n3].innerHTML;
    document.getElementById("autor3").style.position="absolute";
    document.getElementById("autor3").style.bottom="15%";
    document.getElementById("autor3").style.right="13%";
    document.getElementById("autor3").style.color="#ddd";
    document.getElementById("autor3").style.fontSize="20px";
    document.getElementById("autor3").style.textDecoration="none";
    document.getElementById("autor3").style.transition="all 200ms ease 0s";
}
function closeImage3(imagen){
    document.getElementById("popup3").style.visibility="hidden";
    document.getElementById("cerrar3").style.visibility="hidden";
    document.getElementById("volver3").style.visibility="hidden";
    document.getElementById("seguir3").style.visibility="hidden";
    document.getElementById("autor3").style.visibility="hidden";
    contenido3[n3].style.position="unset";
    llevarAdelante("title3h");
}
function previousImage3(){
    contenido3[n3].style.position="unset";

    n3--;

    contenido3[n3].style.position="fixed";
    contenido3[n3].style.width="50vw";
    contenido3[n3].style.top="0";
    contenido3[n3].style.bottom="0";
    contenido3[n3].style.marginTop="auto";
    contenido3[n3].style.marginBottom="auto";
    contenido3[n3].style.left="0";
    contenido3[n3].style.right="0";
    contenido3[n3].style.marginLeft="auto";
    contenido3[n3].style.marginRight="auto";

    if(n3 > 0){
        document.getElementById("volver3").style.visibility="visible";
    }
    
    if(n3 === 0){
        document.getElementById("volver3").style.visibility="hidden";
    }

    console.log(n3);
    console.log(contenido3.length);

    if(n3 <= contenido3.length-1){
        document.getElementById("seguir3").style.visibility="visible";
    }
    if(n3 > contenido3.length){
        document.getElementById("seguir3").style.visibility="hidden";
    }

    document.getElementById("autor3").innerHTML="Por "+ autores3[n3].innerHTML;
}
function nextImage3(){
    contenido3[n3].style.position="unset";

    n3++;

    contenido3[n3].style.position="fixed";
    contenido3[n3].style.width="50vw";
    contenido3[n3].style.top="0";
    contenido3[n3].style.bottom="0";
    contenido3[n3].style.marginTop="auto";
    contenido3[n3].style.marginBottom="auto";
    contenido3[n3].style.left="0";
    contenido3[n3].style.right="0";
    contenido3[n3].style.marginLeft="auto";
    contenido3[n3].style.marginRight="auto";

    if(n3 > 0){
        document.getElementById("volver3").style.visibility="visible";
        document.getElementById("volver3").style.position="absolute";
        document.getElementById("volver3").style.top="45%";
        document.getElementById("volver3").style.right="96%";
        document.getElementById("volver3").style.color="white";
        document.getElementById("volver3").style.fontSize="40px";
        document.getElementById("volver3").style.fontWeight="bold";
        document.getElementById("volver3").style.textDecoration="none";
        document.getElementById("volver3").style.transition="all 200ms";
    }
    console.log(n3);
    console.log(contenido3.length);
    if(n3 === contenido3.length-1){
        document.getElementById("seguir3").style.visibility="hidden";
    }else{
        document.getElementById("seguir3").style.visibility="visible";
        document.getElementById("seguir3").style.position="absolute";
        document.getElementById("seguir3").style.top="45%";
        document.getElementById("seguir3").style.right="2%";
        document.getElementById("seguir3").style.color="white";
        document.getElementById("seguir3").style.fontSize="40px";
        document.getElementById("seguir3").style.fontWeight="bold";
        document.getElementById("seguir3").style.textDecoration="none";
        document.getElementById("seguir3").style.transition="all 200ms";
    }

    document.getElementById("autor3").innerHTML="Por "+ autores3[n3].innerHTML;
}

//----------------------------------------------------------------------------------------------------------------

var contenido4 = [];
var autores4 = [];
var n4 = 0;
function abrirInterfaz4(id4){
    var contenedor4 = document.getElementById(id4);
    if(contenedor4){

    var fotos4 = document.getElementsByClassName("foto4");
    contenido4 = [];

    var at4 = document.getElementsByClassName("autor4");
    autores4 = [];

    for(var i4 = 0; i4 < at4.length; i4++){
        autores4.push(at4[i4]);
    }

    console.log(autores4);

    for(var i4 = 0; i4 < fotos4.length; i4++){
        contenido4.push(fotos4[i4]);
    }

    console.log(contenido4);
    if(contenido4.length > 0){
    contenedor4.addEventListener("click", showImage4(contenido4),true);
    }
    }
}
function showImage4(contenido4){
    n4 = 0;

    location.href= "#popup4";
    document.getElementById("popup4").style.visibility="visible";
    llevarAtras("title4h");

    contenido4[n4].style.position="fixed";
    contenido4[n4].style.width="50vw";
    contenido4[n4].style.top="0";
    contenido4[n4].style.bottom="0";
    contenido4[n4].style.marginTop="auto";
    contenido4[n4].style.marginBottom="auto";
    contenido4[n4].style.left="0";
    contenido4[n4].style.right="0";
    contenido4[n4].style.marginLeft="auto";
    contenido4[n4].style.marginRight="auto";

    document.getElementById("cerrar4").style.visibility="visible";
    document.getElementById("cerrar4").style.position="absolute";
    document.getElementById("cerrar4").style.top="70px";
    document.getElementById("cerrar4").style.right="2%";
    document.getElementById("cerrar4").style.color="white";
    document.getElementById("cerrar4").style.fontSize="40px";
    document.getElementById("cerrar4").style.fontWeight="bold";
    document.getElementById("cerrar4").style.textDecoration="none";
    document.getElementById("cerrar4").style.transition="all 200ms";

    if(n4 > 0){
        document.getElementById("volver4").style.visibility="visible";
        document.getElementById("volver4").style.position="absolute";
        document.getElementById("volver4").style.top="45%";
        document.getElementById("volver4").style.right="96%";
        document.getElementById("volver4").style.color="white";
        document.getElementById("volver4").style.fontSize="40px";
        document.getElementById("volver4").style.fontWeight="bold";
        document.getElementById("volver4").style.textDecoration="none";
        document.getElementById("volver4").style.transition="all 200ms";
    }
    console.log(n4);
    console.log(contenido4.length);

    if(n4 + 1 === contenido4.length){
        document.getElementById("seguir4").style.visibility="hidden";
    }else{
        document.getElementById("seguir4").style.visibility="visible";
        document.getElementById("seguir4").style.position="absolute";
        document.getElementById("seguir4").style.top="45%";
        document.getElementById("seguir4").style.right="2%";
        document.getElementById("seguir4").style.color="white";
        document.getElementById("seguir4").style.fontSize="40px";
        document.getElementById("seguir4").style.fontWeight="bold";
        document.getElementById("seguir4").style.textDecoration="none";
        document.getElementById("seguir4").style.transition="all 200ms";
    }

    document.getElementById("autor4").style.visibility="visible";
    document.getElementById("autor4").innerHTML="Por "+ autores4[n4].innerHTML;
    document.getElementById("autor4").style.position="absolute";
    document.getElementById("autor4").style.bottom="15%";
    document.getElementById("autor4").style.right="13%";
    document.getElementById("autor4").style.color="#ddd";
    document.getElementById("autor4").style.fontSize="20px";
    document.getElementById("autor4").style.textDecoration="none";
    document.getElementById("autor4").style.transition="all 200ms ease 0s";
}
function closeImage4(imagen){
    document.getElementById("popup4").style.visibility="hidden";
    document.getElementById("cerrar4").style.visibility="hidden";
    document.getElementById("volver4").style.visibility="hidden";
    document.getElementById("seguir4").style.visibility="hidden";
    document.getElementById("autor4").style.visibility="hidden";
    contenido4[n4].style.position="unset";
    llevarAdelante("title4h");
}
function previousImage4(){
    contenido4[n4].style.position="unset";

    n4--;

    contenido4[n4].style.position="fixed";
    contenido4[n4].style.width="50vw";
    contenido4[n4].style.top="0";
    contenido4[n4].style.bottom="0";
    contenido4[n4].style.marginTop="auto";
    contenido4[n4].style.marginBottom="auto";
    contenido4[n4].style.left="0";
    contenido4[n4].style.right="0";
    contenido4[n4].style.marginLeft="auto";
    contenido4[n4].style.marginRight="auto";

    if(n4 > 0){
        document.getElementById("volver4").style.visibility="visible";
    }
    
    if(n4 === 0){
        document.getElementById("volver4").style.visibility="hidden";
    }

    console.log(n4);
    console.log(contenido4.length);

    if(n4 <= contenido4.length-1){
        document.getElementById("seguir4").style.visibility="visible";
    }
    if(n4 > contenido4.length){
        document.getElementById("seguir4").style.visibility="hidden";
    }

    document.getElementById("autor4").innerHTML="Por "+ autores4[n4].innerHTML;
}
function nextImage4(){
    contenido4[n4].style.position="unset";

    n4++;

    contenido4[n4].style.position="fixed";
    contenido4[n4].style.width="50vw";
    contenido4[n4].style.top="0";
    contenido4[n4].style.bottom="0";
    contenido4[n4].style.marginTop="auto";
    contenido4[n4].style.marginBottom="auto";
    contenido4[n4].style.left="0";
    contenido4[n4].style.right="0";
    contenido4[n4].style.marginLeft="auto";
    contenido4[n4].style.marginRight="auto";

    if(n4 > 0){
        document.getElementById("volver4").style.visibility="visible";
        document.getElementById("volver4").style.position="absolute";
        document.getElementById("volver4").style.top="45%";
        document.getElementById("volver4").style.right="96%";
        document.getElementById("volver4").style.color="white";
        document.getElementById("volver4").style.fontSize="40px";
        document.getElementById("volver4").style.fontWeight="bold";
        document.getElementById("volver4").style.textDecoration="none";
        document.getElementById("volver4").style.transition="all 200ms";
    }
    console.log(n4);
    console.log(contenido4.length);
    if(n4 === contenido4.length-1){
        document.getElementById("seguir4").style.visibility="hidden";
    }else{
        document.getElementById("seguir4").style.visibility="visible";
        document.getElementById("seguir4").style.position="absolute";
        document.getElementById("seguir4").style.top="45%";
        document.getElementById("seguir4").style.right="2%";
        document.getElementById("seguir4").style.color="white";
        document.getElementById("seguir4").style.fontSize="40px";
        document.getElementById("seguir4").style.fontWeight="bold";
        document.getElementById("seguir4").style.textDecoration="none";
        document.getElementById("seguir4").style.transition="all 200ms";
    }
    document.getElementById("autor4").innerHTML="Por "+ autores4[n4].innerHTML;
}

//----------------------------------------------------------------------------------------------------------------

var contenido5 = [];
var autores5 = [];
var n5 = 0;
function abrirInterfaz5(id5){
    var contenedor5 = document.getElementById(id5);
    if(contenedor5){

    var fotos5 = document.getElementsByClassName("foto5");
    contenido5 = [];

    var at5 = document.getElementsByClassName("autor5");
    autores5 = [];

    for(var i5 = 0; i5 < at5.length; i5++){
        autores5.push(at5[i5]);
    }

    console.log(autores5);

    for(var i5 = 0; i5 < fotos5.length; i5++){
        contenido5.push(fotos5[i5]);
    }

    console.log(contenido5);
    if(contenido5.length > 0){
    contenedor5.addEventListener("click", showImage5(contenido5),true);

    }
    }
}
function showImage5(contenido5){
    n5 = 0;

    location.href= "#popup5";
    document.getElementById("popup5").style.visibility="visible";
    llevarAtras("title5h");

    contenido5[n5].style.position="fixed";
    contenido5[n5].style.width="50vw";
    contenido5[n5].style.top="0";
    contenido5[n5].style.bottom="0";
    contenido5[n5].style.marginTop="auto";
    contenido5[n5].style.marginBottom="auto";
    contenido5[n5].style.left="0";
    contenido5[n5].style.right="0";
    contenido5[n5].style.marginLeft="auto";
    contenido5[n5].style.marginRight="auto";

    document.getElementById("cerrar5").style.visibility="visible";
    document.getElementById("cerrar5").style.position="absolute";
    document.getElementById("cerrar5").style.top="70px";
    document.getElementById("cerrar5").style.right="2%";
    document.getElementById("cerrar5").style.color="white";
    document.getElementById("cerrar5").style.fontSize="40px";
    document.getElementById("cerrar5").style.fontWeight="bold";
    document.getElementById("cerrar5").style.textDecoration="none";
    document.getElementById("cerrar5").style.transition="all 200ms";

    if(n5 > 0){
        document.getElementById("volver5").style.visibility="visible";
        document.getElementById("volver5").style.position="absolute";
        document.getElementById("volver5").style.top="45%";
        document.getElementById("volver5").style.right="96%";
        document.getElementById("volver5").style.color="white";
        document.getElementById("volver5").style.fontSize="40px";
        document.getElementById("volver5").style.fontWeight="bold";
        document.getElementById("volver5").style.textDecoration="none";
        document.getElementById("volver5").style.transition="all 200ms";
    }
    console.log(n5);
    console.log(contenido5.length);

    if(n5 + 1 === contenido5.length){
        document.getElementById("seguir5").style.visibility="hidden";
    }else{
        document.getElementById("seguir5").style.visibility="visible";
        document.getElementById("seguir5").style.position="absolute";
        document.getElementById("seguir5").style.top="45%";
        document.getElementById("seguir5").style.right="2%";
        document.getElementById("seguir5").style.color="white";
        document.getElementById("seguir5").style.fontSize="40px";
        document.getElementById("seguir5").style.fontWeight="bold";
        document.getElementById("seguir5").style.textDecoration="none";
        document.getElementById("seguir5").style.transition="all 200ms";
    }

    document.getElementById("autor5").style.visibility="visible";
    document.getElementById("autor5").innerHTML="Por "+ autores5[n5].innerHTML;
    document.getElementById("autor5").style.position="absolute";
    document.getElementById("autor5").style.bottom="15%";
    document.getElementById("autor5").style.right="13%";
    document.getElementById("autor5").style.color="#ddd";
    document.getElementById("autor5").style.fontSize="20px";
    document.getElementById("autor5").style.textDecoration="none";
    document.getElementById("autor5").style.transition="all 200ms ease 0s";
}
function closeImage5(imagen){
    document.getElementById("popup5").style.visibility="hidden";
    document.getElementById("cerrar5").style.visibility="hidden";
    document.getElementById("volver5").style.visibility="hidden";
    document.getElementById("seguir5").style.visibility="hidden";
    document.getElementById("autor5").style.visibility="hidden";
    contenido5[n5].style.position="unset";
    llevarAdelante("title5h");
}
function previousImage5(){
    contenido5[n5].style.position="unset";

    n5--;

    contenido5[n5].style.position="fixed";
    contenido5[n5].style.width="50vw";
    contenido5[n5].style.top="0";
    contenido5[n5].style.bottom="0";
    contenido5[n5].style.marginTop="auto";
    contenido5[n5].style.marginBottom="auto";
    contenido5[n5].style.left="0";
    contenido5[n5].style.right="0";
    contenido5[n5].style.marginLeft="auto";
    contenido5[n5].style.marginRight="auto";

    if(n5 > 0){
        document.getElementById("volver5").style.visibility="visible";
    }
    
    if(n5 === 0){
        document.getElementById("volver5").style.visibility="hidden";
    }

    console.log(n5);
    console.log(contenido5.length);

    if(n5 <= contenido5.length-1){
        document.getElementById("seguir5").style.visibility="visible";
    }
    if(n5 > contenido5.length){
        document.getElementById("seguir5").style.visibility="hidden";
    }

    document.getElementById("autor5").innerHTML="Por "+ autores5[n5].innerHTML;
}
function nextImage5(){
    contenido5[n5].style.position="unset";

    n5++;

    contenido5[n5].style.position="fixed";
    contenido5[n5].style.width="50vw";
    contenido5[n5].style.top="0";
    contenido5[n5].style.bottom="0";
    contenido5[n5].style.marginTop="auto";
    contenido5[n5].style.marginBottom="auto";
    contenido5[n5].style.left="0";
    contenido5[n5].style.right="0";
    contenido5[n5].style.marginLeft="auto";
    contenido5[n5].style.marginRight="auto";

    if(n5 > 0){
        document.getElementById("volver5").style.visibility="visible";
        document.getElementById("volver5").style.position="absolute";
        document.getElementById("volver5").style.top="45%";
        document.getElementById("volver5").style.right="96%";
        document.getElementById("volver5").style.color="white";
        document.getElementById("volver5").style.fontSize="40px";
        document.getElementById("volver5").style.fontWeight="bold";
        document.getElementById("volver5").style.textDecoration="none";
        document.getElementById("volver5").style.transition="all 200ms";
    }
    console.log(n5);
    console.log(contenido5.length);
    if(n5 === contenido5.length-1){
        document.getElementById("seguir5").style.visibility="hidden";
    }else{
        document.getElementById("seguir5").style.visibility="visible";
        document.getElementById("seguir5").style.position="absolute";
        document.getElementById("seguir5").style.top="45%";
        document.getElementById("seguir5").style.right="2%";
        document.getElementById("seguir5").style.color="white";
        document.getElementById("seguir5").style.fontSize="40px";
        document.getElementById("seguir5").style.fontWeight="bold";
        document.getElementById("seguir5").style.textDecoration="none";
        document.getElementById("seguir5").style.transition="all 200ms";
    }
    document.getElementById("autor5").innerHTML="Por "+ autores5[n5].innerHTML;
}

//----------------------------------------------------------------------------------------------------------------