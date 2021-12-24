<?php

require __DIR__ .'/vendor/autoload.php';

define('TITLE', 'Cadastrar Convenio');

use \App\Entity\Convenio;

if(isset($_POST['nome_fantasia'], $_POST['nome_empresa'], $_POST['cnpj'],  $_POST['email'], $_POST['nome_cont'], $_POST['homepage'], $_POST['telefone'], $_POST['celular'], $_POST['endereco'], $_POST['numero'], $_POST['complemento'], $_POST['cidade'], $_POST['estado'], $_POST['cep'])){

    $obConvenio = new Convenio;
    $obConvenio->nome_fantasia = $_POST['nome_fantasia']; 
    $obConvenio->nome_empresa = $_POST['nome_empresa']; 
    $obConvenio->cnpj = $_POST['cnpj']; 
    $obConvenio->email = $_POST['email'];
    $obConvenio->nome_cont = $_POST['nome_cont'];
    $obConvenio->homepage = $_POST['homepage'];
    $obConvenio->telefone = $_POST['telefone']; 
    $obConvenio->celular = $_POST['celular'];
    $obConvenio->endereco = $_POST['endereco'];
    $obConvenio->numero = $_POST['numero']; 
    $obConvenio->complemento = $_POST['complemento']; 
    $obConvenio->cidade = $_POST['cidade']; 
    $obConvenio->estado = $_POST['estado'];
    $obConvenio->cep = $_POST['cep']; 
    
    $obConvenio->cadastrarConv();
    

    header ('location: cadastrarconv.php');
    exit;
}
include __DIR__ .'/includes/header.php';
include __DIR__ .'/includes/formconvenio.php';
include __DIR__ .'/includes/footer.php';