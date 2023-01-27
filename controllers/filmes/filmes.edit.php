<?php

use App\Database\Connection;
use App\Database\QueryBuilder;

$connection = Connection::make();
$queryBuilder = new QueryBuilder($connection);

$filme = $queryBuilder->findById('filmes',$id,'App\Model\Filmes');
// fill relationship
$filme->genero = $queryBuilder->findById('genero',$filme->genero_id,'App\Model\Genero');

$generos = $queryBuilder->getAll('genero','App\Model\Genero');

require 'views/filmes/filmes.edit.view.php';