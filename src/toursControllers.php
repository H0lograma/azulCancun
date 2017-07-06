<?php
$tours = $app['controllers_factory'];

$tours->get('/detail', function () use ($app) {
    return $app['twig']->render('tours/detalle.twig', array());
})->bind('detalletour');

return $tours;