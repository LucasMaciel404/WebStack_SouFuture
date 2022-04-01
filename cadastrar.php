<?php
//carregando o altoload 
require_once __DIR__ . '/vendor/autoload.php';
use \App\Entity\Curso;

$curso = new Curso;

//verificaçao se  o metodo post esta dando certo;

if (isset($_POST['NomeCurso'], $_POST['descriçao'], $_POST['descriçao'], $_POST['ativo']))
{
    $Curso->NomeCurso = $_POST['NomeCurso'];
    $Curso->NomeCurso = $_POST['NomeCurso'];
    $Curso->NomeCurso = $_POST['NomeCurso'];
    $Curso->executar();

    header('location: index.php?status-success');
    exit;
    
}
include_once __DIR__ . '/includes/Header.php';
include_once __DIR__ . '/includes/TelaLogin.php';
include_once __DIR__ . '/includes/Footer.php';
