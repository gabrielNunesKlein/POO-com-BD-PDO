<?php

namespace \App\Model;

class Produto {
    private $id;
    private $nome;
    private $descricao;

    public function getId(){
        return $this->id;
    }

    public function  setId($id){
        $this->id = id;
    }

    public function getName(){
        return $this->nome;
    }

    public function  setName($nome){
        $this->nome = nome;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function  setDescricao($descricao){
        $this->descricao = $descricao;
    }
}