<?php
require_once 'vendor/autoload.php';

echo "<h1>CRUD com PDO</h1>";

$produto = new \App\Model\Produto();

$produto->setNome("TV");
$produto->setDescricao("Tv 4K 60 polegadas");

$produtoDao = new \App\Model\ProdutoDao();
$produtoDao->create($produto);

echo "Produto: {$produto->getNome()}, Desc: {$produto->getDescricao()}";