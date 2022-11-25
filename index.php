<?php 

require __DIR__.'/vendor/autoload.php';

use \App\Session\Login;

//OBRIGA O USUARIO A ESTAR LOGADO
Login::requireLogout();


include __DIR__.'/includes/header.php';



include __DIR__.'/includes/principal.php';



 
include __DIR__.'/includes/footer.php'; 
?>
