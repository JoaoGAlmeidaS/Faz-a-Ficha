<?php
require __DIR__ . '/vendor/autoload.php';



use \App\Entity\Usuario;
use \App\Session\Login;

Login::requireLogout();

//MENSAGENS DE ALERTA DOS FORMS
$alertaLogin = '';




if (isset($_POST['acao']) && $_POST['acao'] == 'logar') {

    //Busca o Usuario por Login
    $obUsuario = Usuario::getUsuarioPorLogin($_POST['user_name']);

    //Valida a instancia e a senha
    if (!$obUsuario instanceof Usuario || !password_verify($_POST['user_password'], $obUsuario->senha)) {
        $alertaLogin = 'Usuário ou senha inválidos';
    } else {
        //Loga o usuario
        Login::login($obUsuario);
    }
}

include __DIR__ . '/includes/header.php';

include __DIR__ . '/includes/formLogin.php';

include __DIR__ . '/includes/footer.php';