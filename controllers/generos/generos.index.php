<?php

use App\Database\Connection;
use App\Database\QueryBuilder;

$connection = Connection::make();
$queryBuilder = new QueryBuilder($connection);

$generos = $queryBuilder->getAll('genero','App\Model\Genero');
// fill relationship
//foreach ($atores as $ator) {
//    $livro->editora = $queryBuilder->findById('editora',$livro->editora_id,'App\Model\Editora');
//}

require 'views/generos/generos.index.view.php';