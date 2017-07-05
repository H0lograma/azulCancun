<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

//Request::setTrustedProxies(array('127.0.0.1'));

$app->get('/{_locale}', function () use ($app) {
    return $app['twig']->render('index.twig', array());
})->bind('homepage');

$app->get('/{_locale}/about-us', function () use ($app) {
    return $app['twig']->render('nosotros.twig', array());
})->bind('nosotros');

$app->get('/{_locale}/destinations', function () use ($app) {
    return $app['twig']->render('destinos.twig', array());
})->bind('destinos');


$app->get('/{_locale}/services', function () use ($app) {
    return $app['twig']->render('servicios.twig', array());
})->bind('servicios');
$app->get('/{_locale}/services/weddings', function () use ($app) {
    return $app['twig']->render('weddings.twig', array());
})->bind('weddings');
$app->get('/{_locale}/services/dmc', function () use ($app) {
    return $app['twig']->render('dmc.twig', array());
})->bind('dmc');
$app->get('/{_locale}/services/transportation', function () use ($app) {
    return $app['twig']->render('transportation.twig', array());
})->bind('transportation');
$app->get('/{_locale}/services/tours', function () use ($app) {
    return $app['twig']->render('tours/tours.twig', array());
})->bind('tours');
$app->get('/{_locale}/services/packages', function () use ($app) {
    return $app['twig']->render('packages/packages.twig', array());
})->bind('packages');


$app->get('/{_locale}/contact', function () use ($app) {
    return $app['twig']->render('contacto.twig', array());
})->bind('contacto');





$app->error(function (\Exception $e, Request $request, $code) use ($app) {
    if ($app['debug']) {
        return;
    }

    // 404.html, or 40x.html, or 4xx.html, or error.html
    $templates = array(
        'errors/'.$code.'.html.twig',
        'errors/'.substr($code, 0, 2).'x.html.twig',
        'errors/'.substr($code, 0, 1).'xx.html.twig',
        'errors/default.html.twig',
    );

    return new Response($app['twig']->resolveTemplate($templates)->render(array('code' => $code)), $code);
});
/*
$app->get('/{_locale}/{message}/{name}', function ($message, $name) use ($app) {
    return $app['translator']->trans($message, array('%name%' => $name));
});

$app->get('/nosotros', function () use ($app) {
    return $app['translator']->trans('hello',array('%name%' => 'parrafo 2'));
});
*/
