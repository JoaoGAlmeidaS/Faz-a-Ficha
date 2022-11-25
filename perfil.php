<?php 

require __DIR__.'/vendor/autoload.php';

use \App\Session\Login;
use \App\Entity\Usuario;

//OBRIGA O USUARIO A ESTAR LOGADO
Login::requireLogin();




             




    // $string = 'This is a string';
    // $lastChar = substr($string, -3);
    // echo "The last char of the string is $lastChar.";
    // exit;



include __DIR__.'/includes/header.php';

include __DIR__.'/includes/profileF.php';



if(isset($_POST['salvar']) && $_POST['salvar'] == 'salvar'){

    
    $imagem = $_POST['imagem'];

    $verificar = substr($imagem, -4);

    if($verificar == ".png" or $verificar == ".jpg"){
        $obUsuario = Usuario::getUsuario($usuarioLogado['id']);
        $obUsuario->imagem = $_POST['imagem'];
       
        $obUsuario->atualizarIMG();

        echo '<script>
            alert("Imagem inserida com sucesso, faça o login novamente");
            location.href="logout.php"
            </script>';
    exit;
    }
    else{
        echo '<script>
            alert("Ocorreu um erro, o link não termina em .png ou .jpg");
            location.href="perfil.php"
            </script>';
            exit;
    }
}

 
include __DIR__.'/includes/footer.php'; 
?>