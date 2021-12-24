<?php

require __DIR__ .'/vendor/autoload.php';

define('TITLE', 'Atualizar Cadastro');

use \App\Entity\Paciente;


$obPaciente = Paciente::getPacientes($_GET['id_paciente']);

if(!$obPaciente instanceof Paciente){
    header('location: cadastrarpac.php?status=error');
    exit;
  }
  
if(isset($_POST['nome_paciente'],$_POST['rua'],$_POST['numero'],$_POST['complemento'],$_POST['bairro'],$_POST['cep'],$_POST['email'],$_POST['telefone'])){
    
    $obPaciente->nome_paciente = $_POST['nome_paciente']; 
    $obPaciente->rua = $_POST['rua']; 
    $obPaciente->numero = $_POST['numero']; 
    $obPaciente->complemento = $_POST['complemento']; 
    $obPaciente->bairro = $_POST['bairro']; 
    $obPaciente->cep = $_POST['cep']; 
    $obPaciente->email = $_POST['email']; 
    $obPaciente->telefone = $_POST['telefone']; 
    $obPaciente->atualizarPaciente();

    header ('location: cadastrarpac.php');
    exit;
}

include __DIR__ .'/includes/header.php';
include __DIR__ .'/includes/formpaciente.php';
include __DIR__ .'/includes/footer.php';