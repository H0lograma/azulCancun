<?php
$tours = $app['controllers_factory'];
/*
$tours->get('/', function () use ($app) {
    return $app['twig']->render('tours/tours.twig', array());
})->bind('tours');
*/
$tours->get('/lugar-1-1', function () use ($app) {
    return $app['twig']->render('tours/detalle.twig', array(
        'idtour' => 1,
        'idsitio' => 1
    ));
})->bind('lugar-1-1');

$tours->get('/lugar-1-2', function () use ($app) {
    return $app['twig']->render('tours/detalle.twig', array(
        'idtour' => 1,
        'idsitio' => 2
    ));
})->bind('lugar-1-2');

$tours->get('/lugar-1-3', function () use ($app) {
    return $app['twig']->render('tours/detalle.twig', array(
        'idtour' => 1,
        'idsitio' => 3
    ));
})->bind('lugar-1-3');

$tours->get('/lugar-2-1', function () use ($app) {
    return $app['twig']->render('tours/detalle.twig', array(
        'idtour' => 2,
        'idsitio' => 1
    ));
})->bind('lugar-2-1');

$tours->get('/lugar-2-2', function () use ($app) {
    return $app['twig']->render('tours/detalle.twig', array(
        'idtour' => 2,
        'idsitio' => 2
    ));
})->bind('lugar-2-2');

$tours->get('/lugar-2-3', function () use ($app) {
    return $app['twig']->render('tours/detalle.twig', array(
        'idtour' => 2,
        'idsitio' => 3
    ));
})->bind('lugar-2-3');

$tours->get('/lugar-3-1', function () use ($app) {
    return $app['twig']->render('tours/detalle.twig', array(
        'idtour' => 3,
        'idsitio' => 1
    ));
})->bind('lugar-3-1');

$tours->get('/lugar-3-2', function () use ($app) {
    return $app['twig']->render('tours/detalle.twig', array(
        'idtour' => 3,
        'idsitio' => 2
    ));
})->bind('lugar-3-2');

$tours->get('/lugar-3-3', function () use ($app) {
    return $app['twig']->render('tours/detalle.twig', array(
        'idtour' => 3,
        'idsitio' => 3
    ));
})->bind('lugar-3-3');

$tours->get('/lugar-4-1', function () use ($app) {
    return $app['twig']->render('tours/detalle.twig', array(
        'idtour' => 4,
        'idsitio' => 1
    ));
})->bind('lugar-4-1');

$tours->get('/lugar-4-2', function () use ($app) {
    return $app['twig']->render('tours/detalle.twig', array(
        'idtour' => 4,
        'idsitio' => 2
    ));
})->bind('lugar-4-2');

$tours->get('/lugar-4-3', function () use ($app) {
    return $app['twig']->render('tours/detalle.twig', array(
        'idtour' => 4,
        'idsitio' => 3
    ));
})->bind('lugar-4-3');

$tours->get('/lugar-5-1', function () use ($app) {
    return $app['twig']->render('tours/detalle.twig', array(
        'idtour' => 5,
        'idsitio' => 1
    ));
})->bind('lugar-5-1');

$tours->get('/lugar-5-2', function () use ($app) {
    return $app['twig']->render('tours/detalle.twig', array(
        'idtour' => 5,
        'idsitio' => 2
    ));
})->bind('lugar-5-2');

$tours->get('/lugar-5-3', function () use ($app) {
    return $app['twig']->render('tours/detalle.twig', array(
        'idtour' => 5,
        'idsitio' => 3
    ));
})->bind('lugar-5-3');

return $tours;