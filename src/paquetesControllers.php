<?php
$paquetes = $app['controllers_factory'];

$paquetes->get('/detail', function () use ($app) {
    return $app['twig']->render('packages/detalle.twig', array());
})->bind('detallepack');

return $paquetes;
