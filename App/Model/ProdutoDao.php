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
        $query = 'SELECT * FROM PRODUTO';
        $stm = Conexao::getConn()->prepare($query);
        $stm->execute();

        if($stm->rowCount() > 0){
            $resultado = $stm->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }else{
            return [];
        }
    }

    public function update(Produto $produto){
        $query = 'UPDATE PRODUTO SET NOME = ?, DESCRICAO = ? WHERE ID = ?';
        $stm = Conexao::getConn()->prepare($query);
        $stm->bindValue(1, $produto->getNome());
        $stm->bindValue(2, $produto->getDescricao());
        $stm->bindValue(3, $produto->getId());

        $stm->execute();
    }

    public function delete($id){

    }
}