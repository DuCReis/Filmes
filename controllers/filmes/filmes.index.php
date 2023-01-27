<?php

use App\Database\Connection;
use App\Database\QueryBuilder;

$connection = Connection::make();
$queryBuilder = new QueryBuilder($connection);

$filmes = $queryBuilder->getAll('filmes','App\Model\Filmes');
// fill relationship
foreach ($filmes as $filme) {
    $filme->genero = $queryBuilder->findById('genero',$filme->genero_id,'App\Model\Genero');
}

require 'views/filmes/filmes.index.view.php';