<?php

use App\Database\Connection;
use App\Database\QueryBuilder;

$connection = Connection::make();
$queryBuilder = new QueryBuilder($connection);

$generos = $queryBuilder->getAll('genero','App\Model\Genero');

require 'views/filmes/filmes.create.view.php';