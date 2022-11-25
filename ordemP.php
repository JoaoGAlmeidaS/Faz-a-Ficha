<?php 

require __DIR__.'/vendor/autoload.php';

use \App\Session\Login;

//OBRIGA O USUARIO A ESTAR LOGADO
Login::requireLogin();


include __DIR__.'/includes/header.php';


include __DIR__.'/includes/formOP.php';



 
 
?>