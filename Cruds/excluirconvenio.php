<?php

require __DIR__ .'/vendor/autoload.php';

define('TITLE', 'Atualizar Cadastro');

use \App\Entity\Convenio;

if(!isset($_GET['id_convenio']) or !is_numeric($_GET['id_convenio'])){
    header('location: cadastrarconv.php?status=error');
    exit;
}

$obConvenio = Convenio::getConvenios($_GET['id_convenio']);

if(!$obConvenio instanceof Convenio){
    header('location: cadastrarconv.php?status=error');
    exit;
  }

$obConvenio->excluirConvenio();

header ('location: cadastrarconv.php');
exit;

include __DIR__ .'/includes/header.php';
include __DIR__ .'/includes/formconv.php';
include __DIR__ .'/includes/footer.php';