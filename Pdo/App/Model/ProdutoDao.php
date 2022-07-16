<?php

namespace App\Model;

class ProdutoDao{
    //insere na tabela
    public function create(Produto $p){
        $sql = 'INSERT INTO produtos (nome, descricao) VALUES (?,?)';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $p->getNome());
        $stmt->bindValue(2, $p->getDescricao());
        $stmt->execute();
    }
    //traz os dados da tabela
    public function read(){
        $sql = 'SELECT * FROM produtos';
        $stmt = Conexao::getConn()->prepare($sql);
        //como vai se trabalhar com select da-se um execute
        $stmt->execute();

        if($stmt->rowCount() > 0){
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }else{
            return [];
        }
    }
    public function update(Produto $p){
        $sql = 'UPDATE produtos SET nome = ?, descricao = ? WHERE id ?';

        $stmt = Conexao::getConn()->prepare($sql);

        $stmt->bindValue(1, $p->getNome());
        $stmt->bindValue(2, $p->getDescricao());
        $stmt->bindValue(3, $p->getId());
     
        $stmt->execute();
    }
    public function delete($id){
        $sql = 'DELETE FROM produtos WHERE id = ?';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}