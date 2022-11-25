<div class="fundoC">
<?php

$alertaLogin = strlen($alertaLogin) ? '<div class="alert alert-danger">' . $alertaLogin . '</div>' : '';


?>

<div class="container">

    <form class="formCadastrar" method="post">

        <h1 class="h1Cadastrar">Entrar</h1>

        <?= $alertaLogin ?>

        <fieldset>

            <legend><span class="number">1</span> Suas informações básicas</legend>

            <label class="labelCadastrar" for="name">Usuário:</label>
            <input class="inputCadastrar" type="text" id="name" name="user_name">

            <label class="labelCadastrar" for="password">Senha:</label>
            <input class="inputCadastrar" type="password" id="password" name="user_password">

        </fieldset>


        <input type="hidden" name="acao" value="logar">
        <button class="botaoCadastrar" type="submit">Entrar</button>

        <a class="link-bonito" href="cadastro.php">Não possui uma Conta?</a>

    </form>
</div>