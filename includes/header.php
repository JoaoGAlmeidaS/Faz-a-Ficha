<?php 

use \App\Session\Login;

$usuarioLogado = login::getUsuarioLogado();

$usuario = $usuarioLogado ? '
<link rel="stylesheet" href="assets/css/home.css">
    <link rel="icon" href="assets/img/FazaFicha.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body class="d-flex flex-column">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
<a class="logo" href="home.php"><img src="assets/img/FazaFicha.png" alt="Logo" width="100"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item active">
                <a class="nav-link" href="home.php">Inicio</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="sobre.php">Sobre</a>
                </li>
                
                <li>
<div class="dropdown">
<a class="btn btn-secondary bg-dark dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
  '.$usuarioLogado['login'].'
</a>

<ul class="dropdown-menu">
  <li><a class="dropdown-item" href="perfil.php">Perfil</a></li>
  <li><a class="dropdown-item" href="fichas.php">Fichas</a></li>
  <li><hr class="dropdown-divider"></li>
  <li><a class="dropdown-item" href="logout.php">Sair</a></li>
</ul>
</div>' 
 
 : 

'
<link rel="stylesheet" href="assets/css/main.css">
    <link rel="icon" href="assets/img/FazaFicha.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body class="d-flex flex-column">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
<a class="logo" href="index.php"><img src="assets/img/FazaFicha.png" alt="Logo" width="100"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item active">
                <a class="nav-link" href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="sobre.php">Sobre</a>
                </li>
                
                <li>
<li class="nav-item">
<a class="nav-link link-header" href="cadastro.php"><button class="botaoC">Cadastro</button></a>             
</li>

<li class="nav-item">
<a class="nav-link link-header" href="login.php"><button class="botaoC">Entrar</button></a>
</li>';


?>


<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Faz a Ficha</title>
    
            
                <?=$usuario?>
                </li>
            </ul>
            
            </div>
        </div>
        </nav>
    </header>


    
    