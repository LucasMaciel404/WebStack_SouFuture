<?php 
use app\db;
$mensagem = '';
if (isset ($_GET ['status'])) {
    switch ($_GET['status']){
        case 'success':
            $mensagem = '<div class = "alert alert-success"> Ação executada com sucesso!</div>';
            break;
        case 'erro':
            $mensagem = '<div class = "alert alert-danger"> Ação não executada! </div>';
    }
    $resultados = '';
} 

setConnection();
