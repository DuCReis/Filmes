<?php

/* home page */
$router->get('', function() {
    require 'controllers/home.php';
});

/////////////// Filmes ///////////////
/* list filmes */
$router->get('filmes', function() {
    require 'controllers/filmes/filmes.index.php';
});

/* show filme with id */
$router->get('filmes/(\d+)', function($id) {
    require 'controllers/filmes/filmes.show.php';
});

/* delete filme */
$router->delete('filmes/(\d+)', function($id) {
    require 'controllers/filmes/filmes.delete.php';
});

/* add filme */
$router->get('filmes/create', function() {
    require 'controllers/filmes/filmes.create.php';
});

/* insert db filmes */
$router->post('filmes', function() {
    require 'controllers/filmes/filmes.store.php';
});

/* edit filmes */
$router->get('filmes/(\d+)/edit', function($id) {
    require 'controllers/filmes/filmes.edit.php';
});

/* update filmes */
$router->patch('filmes/(\d+)', function($id) {
    require 'controllers/filmes/filmes.update.php';
});

/////////////// Atores ///////////////
/* list atores */
$router->get('atores', function() {
    require 'controllers/atores/atores.index.php';
});

/* show atores with id */
$router->get('atores/(\d+)', function($id) {
    require 'controllers/atores/atores.show.php';
});

/* delete ator */
$router->delete('atores/(\d+)', function($id) {
    require 'controllers/atores/atores.delete.php';
});

/* add ator */
$router->get('atores/create', function() {
    require 'controllers/atores/atores.create.php';
});

/* insert db atores */
$router->post('atores', function() {
    require 'controllers/atores/atores.store.php';
});

/* edit atores */
$router->get('atores/(\d+)/edit', function($id) {
    require 'controllers/atores/atores.edit.php';
});

/* update atores */
$router->patch('atores/(\d+)', function($id) {
    require 'controllers/atores/atores.update.php';
});

/////////////// Generos ///////////////
/* list generos */
$router->get('generos', function() {
    require 'controllers/generos/generos.index.php';
});

/* show generos with id */
$router->get('generos/(\d+)', function($id) {
    require 'controllers/generos/generos.show.php';
});

/* delete generos */
$router->delete('generos/(\d+)', function($id) {
    require 'controllers/generos/generos.delete.php';
});

/* add generos */
$router->get('generos/create', function() {
    require 'controllers/generos/generos.create.php';
});

/* insert db generos */
$router->post('generos', function() {
    require 'controllers/generos/generos.store.php';
});

/* edit generos */
$router->get('generos/(\d+)/edit', function($id) {
    require 'controllers/generos/generos.edit.php';
});

/* update generos */
$router->patch('generos/(\d+)', function($id) {
    require 'controllers/generos/generos.update.php';
});