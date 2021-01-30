<?php

use src\controllers\Home;

//rotas do site
$app->get('/', Home::class.":index");

## ROTAS DE TESTE
$app->get('/users', Home::class.":index");
$app->get('/users/create', Home::class.":create");


$app->get('/products', Home::class.":products");