<?php

use App\Database\Connection;
use App\Database\QueryBuilder;

$connection = Connection::make();
$queryBuilder = new QueryBuilder($connection);

$ator = $queryBuilder->deleteById('atores',$id);

redirect('atores');
