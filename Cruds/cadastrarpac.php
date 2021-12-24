<?php

require __DIR__ .'/vendor/autoload.php';

define('TITLE', 'Cadastrar Paciente');

use \App\Entity\Paciente;

if(isset($_POST['nome_paciente'],$_POST['rua'],$_POST['numero'],$_POST['complemento'],$_POST['bairro'],$_POST['cep'],$_POST['email'],$_POST['telefone'])){
    $obPaciente = new Paciente;
    $obPaciente->nome = $_POST['nome_paciente']; 
    $obPaciente->rua = $_POST['rua']; 
    $obPaciente->numero = $_POST['numero']; 
    $obPaciente->complemento = $_POST['complemento']; 
    $obPaciente->bairro = $_POST['bairro']; 
    $obPaciente->cep = $_POST['cep']; 
    $obPaciente->email = $_POST['email']; 
    $obPaciente->telefone = $_POST['telefone']; 
    $obPaciente->cadastrarPaciente();

    header ('location: cadastrarpac.php');
    exit;
}

include __DIR__ .'/includes/header.php';
include __DIR__ .'/includes/formpaciente.php';
include __DIR__ .'/includes/footer.php';