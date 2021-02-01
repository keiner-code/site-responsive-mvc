<?php
require_once("template.php");
class Inicio extends Template{
    function __construct()
    {
        
    }
    function Template_section($article_img,$text_article,$title_aside,$parrafo_aside,$cover_page,$h4_parrafo){
        echo'<section id="main-section" class="col-md-12 col-ms-12">
        <article id="article-section" class="col-md-7 col-ms-12">
            <img src="',$article_img,'" alt="" srcset="">
            <p class="text-article-img">',$text_article,'</p>
        </article>

        <aside id="aside-section" class="col-md-5 col-ms-12">
           <h2 class="title-aside">',$title_aside,'</h2>
           <h1 class="subtitle-aside">Hora Local</h1>
           <div class="time" id="time"></div>
           <p class="parrafo-aside">',$parrafo_aside,'</p>
           <div class="btn-aside-one">
            <button class="btn-aside">READ PRESS RELEASE</button>
           </div>
        </aside>';
          for ($i=0; $i < 5; $i++) { 
           echo'<div class="col-md-6 col-ms-12 article-description">
            <div class="description-space">
               <div class="header-description col-md-12">
                       <a href="http://">',$cover_page,'</a>
               </div>
               <div class="title-description col-md-12 col-ms-12">
                <img class="icon-article-description col-md-3 col-ms-3" src="./Modelo/img/icon-header.png" alt="" srcset="">
                <h4 class="col-md-9 col-ms-8">',$h4_parrafo,'</h4>
               </div>
               <div class="aside-description-img col-md-4 col-ms-6">
                    <img src="./Modelo/img/description-section-img.jpg" alt="" srcset="">
               </div>
               <div class="col-md-7 col-ms-6 list-description-item" >
                <ol>
                    <li class="title-list-description">Novísimo diccionario de la lengua</li>
                    <li class="title-list-description">Todos los términos</li>
                    <li class="title-list-description">Moderno y las voces propias</li>
                    <li class="title-list-description">Madrid: Espasa</li>
                    <li class="title-list-description">Origen también del alemán</li>
                </ol>
            </div>  
           </div>
        </div>';}
    echo '</section>';
     
   }
}
$ini = new Inicio();
$parrafo = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa velit accusamus
            possimus assumenda cum incidunt quas hic quos aspernatur culpa, atque perspiciatis 
            modi quae id necessitatibus ex earum similique harum?Dolorem eligendi, neque 
            voluptatem sunt deserunt perferendis aperiam beatae maiores iusto sint ducimus 
            ratione distinctio vitae sed totam dolore rem explicabo provident nemo ";
$parrafo_aside = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum beatae qui
                  necessitatibus iste rem quibusdam laboriosam, doloremque reprehenderit nemo
                  numquam sequi placeat expedita sunt perferendis totam ab, cumque itaque quas!
                  Repellat culpa autem reiciendis ex ipsum, perferendis hic obcaecati iure nulla 
                  dolor nam libero eaque non molestiae facilis harum ipsa nesciunt in adipisci tempore 
                  consequatur quis ea unde magnam? Corrupti.
                  Molestias corrupti similique eos adipisci, laborum perspiciatis pariatur aut doloribus ad ";
$h4_parrafo= "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil nostrum velit est blanditiis 
              distinctio itaque doloribus! Distinctio ut , minima dolorem!";

$ini->Template_html("Inicio");
$ini->Template_nav("./Modelo/img/avatar.png","Iniciar Session","admin",false);
$ini->Template_header();
$ini->Template_section("./Modelo/img/img-section.jpeg",$parrafo,"Costoso Falcom",$parrafo_aside,"Titulo De La Portada",$h4_parrafo);
$ini->Template_footer();

require_once("Controlador/ControlUsers.php");
require_once("Modelo/Users.php");
$users = new Users();
$UserControl = new ControlUsers();
$res = $UserControl->ShowUsers('12345');

//var_dump($res[0]->getName_Users());