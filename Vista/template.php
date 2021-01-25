<?php
class Template{

    function __construct(){
    }
    function Template_html($subtitle){
        echo '<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
               <title>Sitio Responsive-',$subtitle,'</title><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
               <link rel="stylesheet" href="./Vista/estilos/estilos.css"><link rel="stylesheet" href="./Vista/estilos/Smarphone.css" media="screen and (max-width: 600px)"></head><body>';
    }

    function Template_nav($img_users,$name_users,$type_users){
       echo'<main id="container">
        <nav id="nav-header" class="col-md-12 col-ms-2">
            <label for="btn-res" class="label-res"><i class="fas fa-bars" id="fa-bars"></i></label>
            <input class="btn-res" type="checkbox" id="btn-res">
            <div id="nav-header-resposive">
            <div class="col-md-1 nav-logo">
                <div class="logo-img">
                    <img src="./Modelo/img/logo.png" alt="logo de la pagina" srcset="">
                </div>
            </div>
            <div class="col-md-1 espace"></div>
            <div class="col-md-7 nav-menu">  
                <ul>
                    <li class="li-nav"><a href="http://">Home</a></li>
                    <li class="li-nav"><a href="http://">Articles</a></li>
                    <li class="li-nav"><a href="http://">About us</a></li>
                    <li class="li-nav"><a href="http://">Forum</a></li>
                    <li class="li-nav"><a href="http://">Space Tecnology</a></li>
                </ul>
            </div>
            <div class="img-avatar col-md-3">
                <select name="date-users" id="" class="btn-dropdowns">
                    <option value="1" class="date-values">',$name_users,'</option>
                    <option value="2" class="date-values">',$type_users,'</option>
                    <option value="3" class="date-values">Cerrar Seccion</option>
                </select> 
                <img src="',$img_users,'" alt="" srcset="">
            </div>
        </div>
        </nav>';
    }
    function Template_header(){
         echo'<header id="header-container" class="col-md-12 col-ms-10"><div class="col-md-2 icon-header">
             <img src="./Modelo/img/icon-header.png" alt="" srcset=""></div><div class="col-md-8"></div>
             <div class="col-md-2 second-icon-header"><img src="./Modelo/img/second-icon.png" alt="" id="second-img-header" srcset="">
             </div></header>';
    }

    function Template_footer(){
        echo'<footer id="footer" class="col-md-12 col-ms-12">
        <div class="col-md-4 col-ms-4">
            <div class="title-footer">
                <a href="http://">QUE HACEMOS</a>
            </div>
            <div class="footer-content">
                <ul>
                 <li><a href="http://">También es una composición</a></li>
                 <li><a href="http://">Las ideas que comunica</a></li>
                 <li><a href="http://">En las «microproposiciones»</a></li>
                 <li><a href="http://">El esqueleto estructural que</a></li>
                 </ul>
            </div>
        </div>
        <div class="col-md-4 col-ms-4">
            <div class="title-footer">
                <a href="http://">SIGENOS EN REDES SOCIALES</a>
            </div>
                <div class="footer-social">
                    <ul>
                    <li><a href="http://"><i class="fab fa-facebook-square"></i></a></li>
                    <li><a href="http://"><i class="fab fa-twitter-square"></i></a></li>
                    <li><a href="http://"><i class="fab fa-whatsapp-square"></i></a></li>
                    <li><a href="http://"><i class="fab fa-instagram-square"></i></a></li>
                </ul>
                </div>
            
        </div>
        <div class="col-md-4 col-ms-4">
            <div class="title-footer">
                <a href="http://">NOS CUENTAS TUS PROYECTOS</a>
            </div>
            <div class="footer-info">
                <ul>
                <li><a href="http://">Politicas De Privacidad</a></li>
                <li><a href="http://">Quienes Somos></a></li>
                <li><a href="http://">Acerca De</a></li>
                <li><a href="http://">Nuestra Sede</a></li>
                </ul>
            </div>
        </div>
    </footer>
</main>
<script src="./Modelo/script/scripts.js"></script>
</body>
</html>';
    }

} 