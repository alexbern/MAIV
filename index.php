<?php
define('DS', DIRECTORY_SEPARATOR);
define('WWW_ROOT', __DIR__ . DS);

ini_set('display_errors', true);
error_reporting(E_ALL);

require 'vendor/autoload.php';
$app = new \Slim\App(['settings' => [
  'displayErrorDetails' => true
  ]
]);

$app->get('/deelnemers', function ($request, $response, $args) {
  $view = new \Slim\Views\PhpRenderer('view/');
  return $view->render($response, 'deelnemers.php', ['basepath' => $request->getUri()->getBasePath()]);
});

$app->get('/deelnemen', function ($request, $response, $args) {
  $view = new \Slim\Views\PhpRenderer('view/');
  return $view->render($response, 'deelnemen.php', ['basepath' => $request->getUri()->getBasePath()]);
});

$app->get('/', function ($request, $response, $args) {
  $view = new \Slim\Views\PhpRenderer('view/');
  return $view->render($response, 'home.php', ['basepath' => $request->getUri()->getBasePath()]   );
});

$app->get('/{anything:.*}', function ($request, $response, $args) {
  $view = new \Slim\Views\PhpRenderer('view/');
  return $view->render($response, 'home.php', ['basepath' => $request->getUri()->getBasePath()]   );
});

$app->run();
