<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return 'API Rekrutasi Blockchain Lab Datascience';
});

$router->get('/{nim}/{nonce_1}/{nonce_2}/{nonce_3}', 'Nonce@check_nonce');
