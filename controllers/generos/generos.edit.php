<?php

use App\Database\Connection;
use App\Database\QueryBuilder;

$connection = Connection::make();
$queryBuilder = new QueryBuilder($connection);

$genero = $queryBuilder->findById('genero',$id,'App\Model\Genero');
// fill relationship
//$livro->editora = $queryBuilder->findById('editora',$livro->editora_id,'App\Model\Editora');

//$editoras = $queryBuilder->getAll('editora','App\Model\Editora');

require 'views/generos/generos.edit.view.php';