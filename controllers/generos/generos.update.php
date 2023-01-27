<?php

use App\Database\Connection;
use App\Database\QueryBuilder;

$connection = Connection::make();
$queryBuilder = new QueryBuilder($connection);

$queryBuilder->update('genero',$id,[
    'nome' => $_POST['nome']
]);

redirect('generos');
