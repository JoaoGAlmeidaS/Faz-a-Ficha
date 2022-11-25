<?php

$alertaCadastro = strlen($alertaCadastro) ? '<div class="alert alert-danger">' . $alertaCadastro . '</div>' : '';

?>
<div class="fundoC">
<div class="container">
    <form class="formCadastrar" method="post">

        <h1 class="h1Cadastrar">Criar Conta</h1>

        <?= $alertaCadastro ?>

        <fieldset>

            <legend><span class="number">1</span> Suas informações básicas</legend>

            <label class="labelCadastrar" for="name">Usuário:</label>
            <input class="inputCadastrar" type="text" id="name" name="user_name" required>

            <label class="labelCadastrar" for="mail">Email:</label>
            <input class="inputCadastrar" type="email" id="mail" name="user_email" required>

            <label class="labelCadastrar" for="password">Senha:</label>
            <input class="inputCadastrar" type="password" id="password" name="user_password" required>

            <label class="labelCadastrar">Gênero:</label>
            <input class="radioCadastrar" type="radio" id="masculino" value="masculino" name="user_gender"><label
                for="masculino" class="light">Masculino</label><br>
            <input class="radioCadastrar" type="radio" id="feminino" value="feminino" name="user_gender"><label
                for="feminino" class="light">Feminino</label><br>
            <input class="radioCadastrar" type="radio" id="outro" value="outro" name="user_gender"><label for="outro"
                class="light">Outro</label>

        </fieldset>



        <button class="botaoCadastrar" type="submit">Criar Conta</button>

        <a class="link-bonito" href="login.php">Já possui uma conta?</a>
    </form>
    </div>