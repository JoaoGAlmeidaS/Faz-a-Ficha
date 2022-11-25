<?php 

require __DIR__.'/vendor/autoload.php';



use \App\Session\Login;
use \App\Entity\Usuario;


//OBRIGA O USUARIO A ESTAR LOGADO


if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    echo '<script>
            alert("Ocorreu um erro, tente novamente");
            location.href="index.php"
            </script>';
    exit;
}

$obUsuario = Usuario::getUsuario($_GET['id']);

//Validar o cadastro
if(!$obUsuario instanceof Usuario){
    echo '<script>
            alert("Ocorreu um erro, tente novamente");
            location.href="index.php"
            </script>';
    exit;
}

if(isset($_POST['email'], $_POST['senha'])){
    

    $obUsuario->email = $_POST['email'];
    $obUsuario->senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    $obUsuario->atualizar();

    echo '<script>
            alert("Usuário editado com sucesso");
            location.href="perfil.php"
            </script>';
    exit;
}


include __DIR__.'/includes/header.php';

include __DIR__.'/includes/profileE.php';





 
include __DIR__.'/includes/footer.php'; 
?>