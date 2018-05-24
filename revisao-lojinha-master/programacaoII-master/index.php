<?php
include_once "app/model/CategoriaCrud.php";
$crud = new CategoriaCrud();
$categorias = $crud->getCategorias();
if (isset($_GET['acao'])){
    $acao = $_GET['acao'];
}else{
    $acao = 'index';
}
switch ($acao){
    case 'index';
        include '/home/aluno/public_html/Loja-master/revisao-lojinha-master/programacaoII-master/app/views/principal/index.php';
        break;
}

//header('Location: app/controller/categoria.php');