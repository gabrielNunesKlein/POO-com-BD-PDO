<?php

namespace App\Model;

class ProdutoDao {

    public function create(Produto $produto){
        $query = 'INSERT INTO PRODUTO (NOME, DESCRICAO) VALUES (?,?)';
        $stmt = Conexao::getConn()->prepare($query);
        $stmt->bindValue(1, $produto->getNome());
        $stmt->bindValue(2, $produto->getDescricao());
        $stmt->execute();
    }

    public function read(){

    }

    public function update(Produto $produto){

    }

    public function delete($id){

    }
}