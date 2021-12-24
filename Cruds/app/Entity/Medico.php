<?php

namespace App\Entity;

use \App\DB\database;
use \PDO;

class Medico{
    public $id_medico;
    public $nome_medico;
    public $rua_medico;
    public $numero_medico;
    public $complemento_medico;
    public $bairro_medico;
    public $cep_medico;
    public $email_medico;
    public $telefone_fixo_medico;

    public function cadastrarmedic(){

        $obDatabase = new Database('medicos');
        $this->id_medico = $obDatabase->insert ([
            'nome_medico' => $this->nome_medico,
            'rua_medico' => $this->rua_medico,
            'numero_medico' => $this->numero_medico,
            'complemento_medico' => $this->complemento_medico,
            'bairro_medico' => $this->bairro_medico,
            'cep_medico' => $this->cep_medico,
            'email_medico' => $this->email_medico,
            'telefone_fixo_medico' => $this->telefone_fixo_medico
        ]);
        return true;
    }

    public function atualizarmedic(){
        return (new Database('medicos'))->update('id_medico = '.$this->id_medico,[
            'nome_medico' => $this->nome_medico,
            'rua_medico' => $this->rua_medico,
            'numero_medico' => $this->numero_medico,
            'complemento_medico' => $this->complemento_medico,
            'bairro_medico' => $this->bairro_medico,
            'cep_medico' => $this->cep_medico,
            'email_medico' => $this->email_medico,
            'telefone_fixo_medico' => $this->telefone_fixo_medico
        ]);
    }

    public function excluirmedic(){
        return (new Database('medicos'))->delete('id_medico ='.$this->id_medico);
    }

    public static function getMedico($where= null, $order = null, $limit = null){
        return (new Database('medicos'))->select($where,$order,$limit)
        ->fetchAll(PDO::FETCH_CLASS,self::class);
    }

    public static function getMedicos($id_medico){
        return (new Database('medicos'))->select('id_medico = '.$id_medico)->fetchObject(self::class);
      }
}