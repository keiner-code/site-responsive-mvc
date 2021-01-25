/*function AgregarMenuHamburgesa(){
    if (window.innerWidth > 600) {
    document.getElementById('btn-res').style.display = "none";
    console.log(window.innerWidth);
    }else{
    document.getElementById('btn-res').style.display = "inline-block";
    }
}*/
window.addEventListener("resize",function(){
    if (window.innerWidth > 600) {
    document.getElementById('btn-res').style.display = "none";
    document.getElementById('fa-bars').style.display = "none";
    }else{
    document.getElementById('btn-res').style.display = "inline-block";
    document.getElementById('fa-bars').style.display = "inline-block";
    }
    
});
addEventListener('load',function(){
    if (window.innerWidth < 600) {
        document.getElementById('second-img-header').setAttribute('src','img/avatar.png');
    }   
});

function actual() {
    fecha=new Date(); //Actualizar fecha.
    hora=fecha.getHours(); //hora actual
    minuto=fecha.getMinutes(); //minuto actual
    segundo=fecha.getSeconds(); //segundo actual
    if (hora<10) { //dos cifras para la hora
        hora="0"+hora;
        }
    if (minuto<10) { //dos cifras para el minuto
        minuto="0"+minuto;
        }
    if (segundo<10) { //dos cifras para el segundo
        segundo="0"+segundo;
        }
    //devolver los datos:
    mireloj = hora+" : "+minuto+" : "+segundo;	
    return mireloj; 
    }

    function actualizar() { //función del temporizador
        mihora=actual(); //recoger hora actual
        document.getElementById("time").innerHTML=mihora
          }
    setInterval(actualizar,1000);
     



