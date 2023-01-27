<?php

use App\Database\Connection;
use App\Database\QueryBuilder;

$connection = Connection::make();
$queryBuilder = new QueryBuilder($connection);

$atores = $queryBuilder->getAll('atores','App\Model\Atores');
// fill relationship
//foreach ($atores as $ator) {
//    $livro->editora = $queryBuilder->findById('editora',$livro->editora_id,'App\Model\Editora');
//}

require 'views/atores/atores.index.view.php';