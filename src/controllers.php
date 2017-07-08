<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

//Request::setTrustedProxies(array('127.0.0.1'));
/*
$app->get('/', function () use ($app) {
    return $app['twig']->render('index.twig', array());
})->bind('homepage1');
*/
$app->get('/{_locale}/', function () use ($app) {
    return $app['twig']->render('index.twig', array(
        'ini' => 1
    ));
})->bind('homepage');

$app->get('/{_locale}/about-us', function () use ($app) {
    return $app['twig']->render('nosotros.twig', array(
        'nos' => 1
    ));
})->bind('nosotros');

$app->get('/es/nosotros', function () use ($app) {
    return $app['twig']->render('nosotros.twig', array(
        'locale' => 'es'
    ));
})->bind('nosotrosesp');

$app->get('/{_locale}/contact', function () use ($app) {
    return $app['twig']->render('contacto.twig', array(
        'cont' => 1
    ));
})->bind('contacto');

$app->get('/{_locale}/quotation', function () use ($app) {
    return $app['twig']->render('cotizacion.twig', array());
})->bind('cotiza');


$app->mount('/{_locale}/destinations',include 'destinosControllers.php');

$app->mount('/{_locale}/services',include 'serviciosControllers.php');

$app->mount('/{_locale}/services/tours',include 'toursControllers.php');

$app->mount('/{_locale}/services/packages',include 'paquetesControllers.php');


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
