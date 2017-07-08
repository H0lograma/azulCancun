<?php

$destinos = $app['controllers_factory'];

$destinos->get('/destino1', function () use ($app) {
    return $app['twig']->render('destinos/destino.twig', array(
        'dest' => 1,
        'iddestino' => 1
    ));
})->bind('destino1');

$destinos->get('/destino2', function () use ($app) {
    return $app['twig']->render('destinos/destino.twig', array(
        'dest' => 1,
        'iddestino' => 2
    ));
})->bind('destino2');

$destinos->get('/destino3', function () use ($app) {
    return $app['twig']->render('destinos/destino.twig', array(
        'dest' => 1,
        'iddestino' => 3
    ));
})->bind('destino3');

$destinos->get('/destino1/hotel-1-1', function () use ($app) {
    return $app['twig']->render('destinos/detalle.twig', array(
        'dest' => 1,
        'iddestino' => 1,
        'idhotel' => 1
    ));
})->bind('hotel-1-1');

$destinos->get('/destino1/hotel-1-2', function () use ($app) {
    return $app['twig']->render('destinos/detalle.twig', array(
        'dest' => 1,
        'iddestino' => 1,
        'idhotel' => 2
    ));
})->bind('hotel-1-2');

$destinos->get('/destino1/hotel-1-3', function () use ($app) {
    return $app['twig']->render('destinos/detalle.twig', array(
        'dest' => 1,
        'iddestino' => 1,
        'idhotel' => 3
    ));
})->bind('hotel-1-3');

$destinos->get('/destino1/hotel-2-1', function () use ($app) {
    return $app['twig']->render('destinos/detalle.twig', array(
        'dest' => 1,
        'iddestino' => 2,
        'idhotel' => 1
    ));
})->bind('hotel-2-1');

$destinos->get('/destino1/hotel-3-1', function () use ($app) {
    return $app['twig']->render('destinos/detalle.twig', array(
        'dest' => 1,
        'iddestino' => 3,
        'idhotel' => 1
    ));
})->bind('hotel-3-1');

$destinos->get('/destino1/hotel-3-2', function () use ($app) {
    return $app['twig']->render('destinos/detalle.twig', array(
        'dest' => 1,
        'iddestino' => 3,
        'idhotel' => 2
    ));
})->bind('hotel-3-2');

return $destinos;