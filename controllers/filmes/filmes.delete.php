<?php

use App\Database\Connection;
use App\Database\QueryBuilder;

$connection = Connection::make();
$queryBuilder = new QueryBuilder($connection);

$filme = $queryBuilder->deleteById('filmes',$id);

redirect('filmes');
