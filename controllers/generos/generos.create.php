<?php

use App\Database\Connection;
use App\Database\QueryBuilder;

$connection = Connection::make();
$queryBuilder = new QueryBuilder($connection);

//$editoras = $queryBuilder->getAll('filmes','App\Model\Filmes');

require 'views/generos/generos.create.view.php';