<?php
require __DIR__ . '/vendor/autoload.php';

use \App\Entity\Usuario;
use \App\Session\Login;

Login::requireLogout();

$alertaCadastro = '';
//VALIDAÇÃO DO POST
if (isset($_POST['user_name'], $_POST['user_email'], $_POST['user_password'], $_POST['user_gender'])) {

    //Busca o Usuario por Login
    $obUsuario = Usuario::getUsuarioPorLogin($_POST['user_name']);
    if ($obUsuario instanceof Usuario) {
        $alertaCadastro = 'O Usuário digitado já está em uso';
    } else {
        $obUsuario = new Usuario;
        $obUsuario->login = $_POST['user_name'];
        $obUsuario->email = $_POST['user_email'];
        $obUsuario->senha = password_hash($_POST['user_password'], PASSWORD_DEFAULT);
        $obUsuario->genero = $_POST['user_gender'];
        $obUsuario->cadastrar();

        //Loga o usuario
        echo '<script>
            alert("Conta criada com sucesso, já pode realizar o login");
            location.href="login.php"
            </script>';
        exit;
        exit;
    }
};


include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/formulario.php';
?>
</div>
<footer id="sticky-footer" class="flex-shrink-0 py-4 bg-dark text-white-50 ">
    <div class="container text-center">
        <small>Copyright &copy; Your Website</small>
    </div>
</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
    integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
</script>
</body>

</html>