<?php
require_once("template.php");
class Login extends Template{

    public function __construct()
    {
        
    }

}

$login = new Login();
$login->Template_html("Login");
$login->Template_nav("./Modelo/img/avatar.png","Iniciar Session","admin",false);
$login->Template_header();
$login->Template_footer();

