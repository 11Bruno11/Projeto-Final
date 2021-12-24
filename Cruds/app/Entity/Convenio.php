<?php

namespace App\Entity;

use \App\DB\database;
use \PDO;

class Convenio{
    public $id_convenio;
    public $nome_fantasia;
    public $nome_empresa;
    public $cnpj;
    public $email;
    public $nome_cont;
    public $homepage;
    public $telefone;
    public $celular;
    public $endereco;
    public $numero;
    public $complemento;
    public $cidade;
    public $estado;
    public $cep;

    public function cadastrarConv(){

        $obDatabase = new Database('convenios');
        $this->id_convenio = $obDatabase->insert ([
            'nome_fantasia' => $this->nome_fantasia,
            'nome_empresa' => $this->nome_empresa,
            'cnpj' => $this->cnpj,
            'email' => $this->email,
            'nome_cont' =>$this->nome_cont,
            'homepage' =>$this->homepage,
            'telefone' => $this->telefone,
            'celular' =>$this->celular,
            'endereco' =>$this->endereco,
            'numero' => $this->numero,
            'complemento' => $this->complemento,
            'cidade' =>$this->cidade,
            'estado'=>$this->estado,
            'cep' => $this->cep   
        ]);
        
        return true;
    }

    public function atualizarConvenio(){
        return (new Database('convenios'))->update('id_convenio = '.$this->id_convenio,[
            'nome_fantasia' => $this->nome_fantasia,
            'nome_empresa' => $this->nome_empresa,
            'cnpj' => $this->cnpj,
            'email' => $this->email,
            'nome_cont' =>$this->nome_cont,
            'homepage' =>$this->homepage,
            'telefone' => $this->telefone,
            'celular' =>$this->celular,
            'endereco' =>$this->endereco,
            'numero' => $this->numero,
            'complemento' => $this->complemento,
            'cidade' =>$this->cidade,
            'estado'=>$this->estado,
            'cep' => $this->cep  
            
        ]);
    }

    public function excluirConvenio(){
        return (new Database('convenios'))->delete('id_convenio ='.$this->id_convenio);
    }

    public static function getConvenio($where= null, $order = null, $limit = null){
        return (new Database('convenios'))->select($where,$order,$limit)
        ->fetchAll(PDO::FETCH_CLASS,self::class);
    }

    public static function getConvenios($id_convenio){
        return (new Database('convenios'))->select('id_convenio = '. $id_convenio)->fetchObject(self::class);
      }
}