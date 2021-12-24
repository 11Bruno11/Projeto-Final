<?php

require __DIR__ .'/vendor/autoload.php';

define('TITLE', 'Cadastrar Medico');

use \App\Entity\Medico;

if(isset($_POST['nome_medico'],$_POST['rua_medico'],$_POST['numero_medico'],$_POST['complemento_medico'],$_POST['bairro_medico'],$_POST['cep_medico'],$_POST['email_medico'],$_POST['telefone_fixo_medico'])){
    $obMedico = new Medico;
    $obMedico->nome_medico = $_POST['nome_medico']; 
    $obMedico->rua_medico = $_POST['rua_medico']; 
    $obMedico->numero_medico = $_POST['numero_medico']; 
    $obMedico->complemento_medico = $_POST['complemento_medico']; 
    $obMedico->bairro_medico = $_POST['bairro_medico']; 
    $obMedico->cep_medico = $_POST['cep_medico']; 
    $obMedico->email_medico = $_POST['email_medico']; 
    $obMedico->telefone_fixo_medico = $_POST['telefone_fixo_medico']; 
    $obMedico->cadastrarmedic();

    header ('location: cadastrarmedic.php');
    exit;
}

include __DIR__ .'/includes/header.php';
include __DIR__ .'/includes/formmedico.php';
include __DIR__ .'/includes/footer.php';