<?php
require_once 'vendor/autoload.php';

echo "<h1>CRUD com PDO</h1>";

$produto = new \App\Model\Produto();

$produto->setId(24);
$produto->setNome("Janela");
$produto->setDescricao("Vidro");

$produtoDao = new \App\Model\ProdutoDao();
//$produtoDao->create($produto);
//$produtoDao->update($produto);
$produtoDao->delete(25);
$produtoDao->read();


foreach($produtoDao->read() as $produto){
    echo $produto['NOME'] . "<br>". $produto['DESCRICAO'] . "<hr>";
}