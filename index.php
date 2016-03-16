<?php
define('DS', DIRECTORY_SEPARATOR);
define('WWW_ROOT', __DIR__ . DS);

ini_set('display_errors', true);
error_reporting(E_ALL);

require 'dao/UserDAO.php';

require 'vendor/autoload.php';

$app = new \Slim\App(['settings' => [
  'displayErrorDetails' => true
  ]
]);

$app->get('/deelnemers', function ($request, $response, $args) {
  $view = new \Slim\Views\PhpRenderer('view/');
  return $view->render($response, 'deelnemers.php', ['basepath' => $request->getUri()->getBasePath()]);
});

//DEELNEMEN
$app->get('/deelnemen', function ($request, $response, $args) {
  $view = new \Slim\Views\PhpRenderer('view/');
  $userDAO = new UserDAO();
  if ($_GET) {
    $params = $request->getQueryParams();
    print_r($params);
  }
  return $view->render($response, 'deelnemen.php', ['basepath' => $request->getUri()->getBasePath()]);
});

//HOME
$app->get('/', function ($request, $response, $args) {
  $view = new \Slim\Views\PhpRenderer('view/');
  return $view->render($response, 'home.php', ['basepath' => $request->getUri()->getBasePath()]   );
});


//404
$app->get('/{anything:.*}', function ($request, $response, $args) {
  $view = new \Slim\Views\PhpRenderer('view/');
  return $view->render($response, 'home.php', ['basepath' => $request->getUri()->getBasePath()]   );
});

$app->run();
