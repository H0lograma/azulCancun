<?php
$paquetes = $app['controllers_factory'];

$paquetes->get('/paquete-1', function () use ($app) {
    return $app['twig']->render('packages/detalle.twig', array(
        'idpaquete' => 1
    ));
})->bind('paquete-1');

$paquetes->get('/paquete-2', function () use ($app) {
    return $app['twig']->render('packages/detalle.twig', array(
        'idpaquete' => 2
    ));
})->bind('paquete-2');

$paquetes->get('/paquete-3', function () use ($app) {
    return $app['twig']->render('packages/detalle.twig', array(
        'idpaquete' => 3
    ));
})->bind('paquete-3');

return $paquetes;
