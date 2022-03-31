<?php
namespace App\db;
use PDO;
use PDOException;
class Database
{
    const HOST = 'localhost'  ;
    const NAME = 'soufuturedb';
    const USER = 'root'       ;
    const PASS = ''           ;

    private $table;
    private $connection;
    public function setConnection()
    {
            try {
                $this -> connection = new PDO('mysql:host=' . self::HOST . 'dbname=' . self::NAME,self::USER,self::PASS);
                $this -> connection -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            }
            catch(PDOException $erro){
                die ('Fatal Erro!!' . $erro -> getMessage());
            }    
    }
    public function execute($query,$params = []){
        try{
            $statement = $this->connection->prepare($query);
            $statement -> execute($params);
            $this -> $statement;
        }
        catch(PDOException $erro){
            die ('Fatal Erro!!02' . $erro -> getmessage());
        } 
    }
    public function insert($values){
        //preparando a $query;
        $fields = array_keys($values);
        $binds = array_pad([], count($fields),'?');

        //monta a query;
        $query = 'INSERT INTO' .   $this->table . '(' . impload(',',$fields) . ' ) VALUES ( ' .implode(',',$binds);

        //Executa query;
        return execute($query, array_values($values));

        //retorna o último id inserido;
        return $this -> conection -> lastInsertId();
    }
    public function select ($where = NULL , $oder = NULL, $limit = NULL, $fields = '*')
    {
        //preparar os dados da query;
        $where = strlen($where) ? 'WHERE ' . $where : '';
        $order = strlen($order) ? 'ORDER BY ' . $order : '';
        $limit = strlen($limit) ? 'LIMIT ' . $limit : '';

        //Monta a query;
        $query = 'SELECT' . $fields . 'FROM ' . $this ->table . ' ' . $where . ' ' . $order. ' ' . $limit;

        //executa a query;
        $this -> execute($query);
    }
    public function update($where, $values){
        //passar os dados da $querry;
        $fields = array_keys($values);

        //monta a query;
        $query = 'UPDATE' . $this->table . 'SET' . implode('=?', $fields) . '=? WHERE' . $where;
    }
    public function delete($where){
        //montar a query
        $query = 'DELEETE FROM ' . $this->table . 'WHERE' . $where;

        //executar query;
        $this->execute ($query);

        //retornar verdadeiro
        return true;
    }
}