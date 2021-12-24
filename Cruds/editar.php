<?php

require __DIR__ .'/vendor/autoload.php';

define('TITLE', 'Atualizar Cadastro');

use \App\Entity\Medico;

// if(!isset($_GET['id_medico']) or !is_numeric($_GET['id_medico'])){
//     header('location: cadastrarmedic.php?status=error');
//     exit;
// }

$obMedico = Medico::getMedicos($_GET['id_medico']);

if(!$obMedico instanceof Medico){
    header('location: cadastrarmedic.php?status=error');
    exit;
  }
  
if(isset($_POST['nome_medico'],$_POST['rua_medico'],$_POST['numero_medico'],$_POST['complemento_medico'],$_POST['bairro_medico'],$_POST['cep_medico'],$_POST['email_medico'],$_POST['telefone_fixo_medico'])){
    
    $obMedico->nome_medico = $_POST['nome_medico']; 
    $obMedico->rua_medico = $_POST['rua_medico']; 
    $obMedico->numero_medico = $_POST['numero_medico']; 
    $obMedico->complemento_medico = $_POST['complemento_medico']; 
    $obMedico->bairro_medico = $_POST['bairro_medico']; 
    $obMedico->cep_medico = $_POST['cep_medico']; 
    $obMedico->email_medico = $_POST['email_medico']; 
    $obMedico->telefone_fixo_medico = $_POST['telefone_fixo_medico']; 
    $obMedico->atualizarmedic();

    header ('location: cadastrarmedic.php');
    exit;
}

include __DIR__ .'/includes/header.php';
include __DIR__ .'/includes/formmedico.php';
include __DIR__ .'/includes/footer.php';