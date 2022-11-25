<?php 

namespace App\Db;

use \PDO;
use PDOException;

/**
 * Conexão com o banco de dados
 */

class Database{
    const HOST = 'localhost';
    const NAME = 'fazaficha';
    const USER = 'root';
    const PASS = '';

    /**
     * nome da tabela a ser manipulada
     * @var string
     */
    private $table;

    /**
     * Instancia de conexão com banco de dados
     * @var PDO
     */
    private $connection;

    /**
     * Define a tabela e instancia a conexão
     */
    public function __construct($table = null)
    {
        $this->table = $table;
        $this->setConnection();
    }

    /**
     * Método responsavel pela criação da conexão com o banco de dados
     */
    private function setConnection(){
        try{
            $this->connection = new PDO('mysql:host='.self::HOST.';dbname='.self::NAME,self::USER,self::PASS);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e){
            die('ERROR: '.$e->getMessage());
        }
    }


    /**
     * Metodo responsavel por executar queries dentro do banco de dados
     * @param string query
     * @param array $params
     * @return PDOStatement
     */
    public function execute($query, $params = []){
        try{
            $statement = $this->connection->prepare($query);
            $statement->execute($params);
            return $statement;
        }
        catch(PDOException $e){
            die('ERROR: '.$e->getMessage());
        }
    }

    /**
     * Metodo responsavel por inserir dados no banco
     * @param array $values [ field => value ]
     * @return integer
     */
    public function insert($values){

        //Dados da query
        $fields = array_keys($values);
        $binds = array_pad([],count($fields), '?');

        
        


        //Monta a query
        $query = ' INSERT INTO '.$this->table.' ('.implode(',',$fields).') VALUES ('.implode(',',$binds).')';

        /**
         * Executa o insert
         */
        $this->execute($query,array_values($values));

        /**
         * Retorna o ID inserido
         */
        return $this->connection->lastInsertId();
    }

    public function select($where = null, $order = null, $limit = null, $fields = '*'){
        //DADOS DA QUERY
        $where = strlen($where) ? 'WHERE '.$where : '';
        $order = strlen($order) ? 'ORDER BY '.$order : '';
        $limit = strlen($limit) ? 'LIMIT '.$limit : '';
    
        //MONTA A QUERY
        $query = 'SELECT '.$fields.' FROM '.$this->table.' '.$where.' '.$order.' '.$limit;
    
        //EXECUTA A QUERY
        return $this->execute($query);
      }

    
      /**
       * Método responsável por excluir dados do banco
       * @param  string $where
       * @return boolean
       */
      public function delete($where){
        //MONTA A QUERY
        $query = 'DELETE FROM '.$this->table.' WHERE '.$where;
    
        //EXECUTA A QUERY
        $this->execute($query);
    
        //RETORNA SUCESSO
        return true;
      
    }

    public function update($where,$values){
        //DADOS DA QUERY
        $fields = array_keys($values);
    
        //MONTA A QUERY
        $query = 'UPDATE '.$this->table.' SET '.implode('=?,',$fields).'=? WHERE '.$where;
        
    
        //EXECUTAR A QUERY
        $this->execute($query,array_values($values));
    
        //RETORNA SUCESSO
        return true;
      }
    
};


?>