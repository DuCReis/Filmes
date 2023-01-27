<?php

use App\Database\Connection;
use App\Database\QueryBuilder;

$connection = Connection::make();
$queryBuilder = new QueryBuilder($connection);

$ator = $queryBuilder->findById('atores',$id,'App\Model\Atores');
// fill relationship
//$livro->editora = $queryBuilder->findById('editora',$livro->editora_id,'App\Model\Editora');

//$editoras = $queryBuilder->getAll('editora','App\Model\Editora');

require 'views/atores/atores.edit.view.php';