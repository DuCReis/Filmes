<?php

use App\Database\Connection;
use App\Database\QueryBuilder;

$connection = Connection::make();
$queryBuilder = new QueryBuilder($connection);

$genero = $queryBuilder->deleteById('genero',$id);

redirect('generos');
