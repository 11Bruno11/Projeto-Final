<?php

namespace App\Entity;

use \App\DB\database;
use \PDO;

class Paciente{
    public $id_paciente;
    public $nome_paciente;
    public $rua;
    public $numero;
    public $complemento;
    public $bairro;
    public $cep;
    public $email;
    public $telefone;

    public function cadastrarPaciente(){

        $obDatabase = new Database('tbl_paciente');
        $this->id_paciente = $obDatabase->insert ([
            'nome_paciente' => $this->nome_paciente,
            'rua' => $this->rua,
            'numero' => $this->numero,
            'complemento' => $this->complemento,
            'bairro' => $this->bairro,
            'cep' => $this->cep,
            'email' => $this->email,
            'telefone' => $this->telefone
        ]);
        return true;
    }

    public function atualizarPaciente(){
        return (new Database('tbl_paciente'))->update('id_paciente = '.$this->id_paciente,[
            'nome_paciente' => $this->nome_paciente,
            'rua' => $this->rua,
            'numero' => $this->numero,
            'complemento' => $this->complemento,
            'bairro' => $this->bairro,
            'cep' => $this->cep,
            'email' => $this->email,
            'telefone' => $this->telefone
        ]);
    }

    public function excluirPaciente(){
        return (new Database('tbl_paciente'))->delete('id_paciente ='.$this->id_paciente);
    }

    public static function getPaciente($where= null, $order = null, $limit = null){
        return (new Database('tbl_paciente'))->select($where,$order,$limit)
        ->fetchAll(PDO::FETCH_CLASS,self::class);
    }

    public static function getPacientes($id_paciente){
        return (new Database('tbl_paciente'))->select('id_paciente = '. $id_paciente)->fetchObject(self::class);
      }
}