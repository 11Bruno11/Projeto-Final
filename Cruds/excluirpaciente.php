<?php

require __DIR__ .'/vendor/autoload.php';

define('TITLE', 'Atualizar Cadastro');

use \App\Entity\Paciente;

if(!isset($_GET['id_paciente']) or !is_numeric($_GET['id_paciente'])){
    header('location: cadastrarpac.php?status=error');
    exit;
}

$obPaciente = Paciente::getPacientes($_GET['id_paciente']);

if(!$obPaciente instanceof Paciente){
    header('location: cadastrarmedic.php?status=error');
    exit;
  }

$obPaciente->excluirPaciente();

header ('location: cadastrarpac.php');
exit;

include __DIR__ .'/includes/header.php';
include __DIR__ .'/includes/formpaciente.php';
include __DIR__ .'/includes/footer.php';