<?php
class Curso 
{
    //Identificador único
    public $id; 

    //Nome do curso 
    public $NomeCurso; 

    //Descrição do curso 
    public $Descricao; 

    //Ativo
    public $Ativo; 

    //Data 
    public $Data;

    //Método responsável por inserir os cursos no banco
    public function cadastrar()
    {
        //Definir datas
        $this->Data = date('y-m-d');

        //Inserir cursos no banco de dados
        $obDatabase = new Database('cursos');
        $this -> id -> $obDatabase -> insert([
            "NomeCurso" => $this ->NomeCurso,
            "Ativo" => $this ->Ativo,
            "Descricao" => $this ->Descricao,
            "Data" => $this ->Data
        ]);

        //Retorna verdadeiro 
        return true;
    }
}