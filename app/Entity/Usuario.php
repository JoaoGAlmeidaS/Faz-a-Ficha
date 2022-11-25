<?php 

namespace App\Entity;

use \App\Db\Database;
use \PDO;

class Usuario{

    /**
     * Identificador único do usuario
     * @var integer
     */
    public $id;


    /**
     * Login do usuário
     * @var string
     */
    public $login;

    /**
     * Email do usuário
     * @var string
     */
    public $email;

    /**
     * Senha do usuário
     * @var string
     */
    public $senha;

    /**
     * Genero do usuário
     * @var string(masculino/feminino/outro)
     */
    public $genero;


    public $imagem;


    /**
     * Metodo para cadastrar no banco
     * @return boolean
     */
    public function cadastrar(){

        //Inserir o usuário no banco
        $obDatabase = new Database('usuarios');
        $this->id = $obDatabase->insert([
            'login' => $this->login,
            'email' => $this->email,
            'senha' => $this->senha,
            'genero' => $this->genero
        
            
        ]);
    
        //Retornar Sucesso
        return true;

    }

    
   
    /**
     * Metodo responsavel por retornar uma instancia de usuario com base no Login
     * @param string $login
     * @return Usuario
     */
    public static function getUsuarioPorLogin($login){
        return (new Database('usuarios'))->select('login = "'.$login.'"')->fetchObject(self::class);
        
    }

    /**
     * Metodo responsavel por buscar o usuario pelo ID
     * @param integer $id
     * @return Usuario
     */
    public static function getUsuario($id){
        return (new Database('usuarios'))->select('id = '.$id)->fetchObject(self::class);

    }
    
    
        /**
     * Metodo responsavel por atualizar um usuario no banco
     * @return boolean
     */
    public function atualizar(){
        return (new Database('usuarios'))->update('id = '.$this->id,['email' => $this->email, 'senha' => $this->senha]);
    }
    public function atualizarIMG(){
        return (new Database('usuarios'))->update('id = '.$this->id,['imagem' => $this->imagem]);
    }


    
    


}

?>