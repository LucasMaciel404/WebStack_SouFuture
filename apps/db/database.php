<?php
namespace App\db;

class Database
{
    const HOST = 'localhost'  ;
    const NAME = 'soufuturedb';
    const USER = 'root'       ;
    const PASS = ''           ;

    private $tabela;
    private $connection;
    public function setConnection()
    {
            try {
                $this -> connection = new PDO('mysql:host=' . self::HOST . 'dbname=' . self::NAME,self::USER,self::PASS);
                $this -> connection -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            }
            catch(PDOException $erro){
                die ('Fatal Erro!!' . $erro -> getmessage());
            }    
    } 
    public function execute($query,$params = []){
        try{
            $statement = $this->connection->prepare($query);
            $statement -> execute($params);
            return $statement;
        }
        catch(PDOException $erro){
            die ('Fatal Erro!!02' . $erro -> getmessage());
        } 
    }
}