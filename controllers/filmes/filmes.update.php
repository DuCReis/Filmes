<?php

use App\Database\Connection;
use App\Database\QueryBuilder;

$connection = Connection::make();
$queryBuilder = new QueryBuilder($connection);

$queryBuilder->update('filmes',$id,[
    'nome' => $_POST['nome'],
    'genero_id' => $_POST['genero_id']
]);

redirect('filmes');
