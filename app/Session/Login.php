<?php 

namespace App\Session;

class Login{

    /**
     * Metodo responsavel por iniciar a sessão
     */
    private static function init(){
        //Verifica o status da sessão
        if(session_status() !== PHP_SESSION_ACTIVE){
            //Inicia a sessão
            session_start();
        }
    }

    /**
     * Metodo responsavel por retornar os dados do usuario Logado
     * @return array
     */
    public static function getUsuarioLogado(){
    
        self::init();

        return self::isLogged() ? $_SESSION['usuario'] : null;
    }


    /**
     * Metodo responsavel por logar o usuario
     * @param Usuario $obUsuario
     */
    public static function login($obUsuario){
        //Inicia a sessão
        self::init();

        //Sessão de usuario
        $_SESSION['usuario'] = [
            'id' => $obUsuario->id,
            'email' => $obUsuario->email,
            'login' => $obUsuario->login,
            'imagem' => $obUsuario->imagem,            
        ];

        
        //Redireciona o Usuário para Index.php
         header('location: home.php');
         exit;

    }

    /**
     * Metodo responsavel por deslogar o usuario
     */
    public static function logout(){
        self::init();

        //remove a sessão do usuario
        unset($_SESSION['usuario']);

        header('location: login.php');
        exit;
    }


    /**
     * Metodo responsavel por verificar se o usuario está logado
     * @return boolean
     */
    public static function isLogged(){

        //Inicia a sessão
        self::init();

        //Validação da sessão
        return isset($_SESSION['usuario']['id']);
    }

    /**
     * Metodo responsavel por obrigar o usuario a estar logado para acessar
     */
    public static function requireLogin(){
        if(!self::isLogged()){
            header('location: login.php');
            exit;
        }
    }

    /**
     * Metodo responsavel por obrigar o usuario a estar deslogado para acessar
     */
    public static function requireLogout(){
        if(self::isLogged()){
            header('location: home.php');
            exit;
        }
    }

}


?>