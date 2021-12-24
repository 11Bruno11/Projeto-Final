<?php

require __DIR__ .'/vendor/autoload.php';

define('TITLE', 'Atualizar Cadastro');

use \App\Entity\Medico;

if(!isset($_GET['id_medico']) or !is_numeric($_GET['id_medico'])){
    header('location: cadastrarmedic.php?status=error');
    exit;
}

$obMedico = Medico::getMedicos($_GET['id_medico']);

if(!$obMedico instanceof Medico){
    header('location: cadastrarmedic.php?status=error');
    exit;
  }

$obMedico->excluirmedic();

header ('location: cadastrarmedic.php');
exit;

include __DIR__ .'/includes/header.php';
include __DIR__ .'/includes/formmedico.php';
include __DIR__ .'/includes/footer.php';