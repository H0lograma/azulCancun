<?php
$servicios = $app['controllers_factory'];


$servicios->get('/weddings', function () use ($app) {
    return $app['twig']->render('weddings.twig', array(
        'serv' => 1
    ));
})->bind('weddings');

$servicios->get('/dmc', function () use ($app) {
    return $app['twig']->render('dmc.twig', array(
        'serv' => 1
    ));
})->bind('dmc');

$servicios->get('/transportation', function () use ($app) {
    return $app['twig']->render('transportation.twig', array(
        'serv' => 1
    ));
})->bind('transportation');

$servicios->get('/tours', function () use ($app) {
    return $app['twig']->render('tours/tours.twig', array(
        'serv' => 1
    ));
})->bind('tours');

$servicios->get('/packages', function () use ($app) {
    return $app['twig']->render('packages/packages.twig', array(
        'serv' => 1
    ));
})->bind('packages');

return $servicios;