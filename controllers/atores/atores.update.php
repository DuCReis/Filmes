<?php

use App\Database\Connection;
use App\Database\QueryBuilder;

$connection = Connection::make();
$queryBuilder = new QueryBuilder($connection);

$queryBuilder->update('atores',$id,[
    'nome' => $_POST['nome']
]);

redirect('atores');
