<?php

$destinos = $app['controllers_factory'];
$destinos->get('/destino1', function () use ($app) {
    return $app['twig']->render('destinos/destino.twig', array());
})->bind('destino1');

$destinos->get('/destino2', function () use ($app) {
    return $app['twig']->render('destinos/destino.twig', array());
})->bind('destino2');

$destinos->get('/detalle', function () use ($app) {
    return $app['twig']->render('destinos/detalle.twig', array());
})->bind('detalledest');

return $destinos;