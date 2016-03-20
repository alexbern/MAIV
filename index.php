<?php
session_start();
define('DS', DIRECTORY_SEPARATOR);
define('WWW_ROOT', __DIR__ . DS);

ini_set('display_errors', true);
error_reporting(E_ALL);

require_once WWW_ROOT . 'phpass' . DS . 'Phpass.php';

require 'dao/UserDAO.php';
require 'dao/DeelnemersDAO.php';

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
  unset($_SESSION['error']);
  unset($_SESSION['info']);
  return $view->render($response, 'deelnemen.php', ['basepath' => $request->getUri()->getBasePath()]);
});

//DEELNEMEN POST
$app->post('/deelnemen', function ($request, $response, $args) {
  require 'controllers/deelnemenPostController.php';
});

//HOME
$app->get('/', function ($request, $response, $args) {
  $view = new \Slim\Views\PhpRenderer('view/');
  return $view->render($response, 'home.php', ['basepath' => $request->getUri()->getBasePath()]   );
});

//ABOUT BOEK
$app->get('/boek', function ($request, $response, $args) {
  $view = new \Slim\Views\PhpRenderer('view/');
  return $view->render($response, 'boek.php', ['basepath' => $request->getUri()->getBasePath()]   );
});

//CMS
//ABOUT BOEK
$app->get('/cms', function ($request, $response, $args) {
  require 'controllers/cmsController.php';
});


//404
$app->get('/{anything:.*}', function ($request, $response, $args) {
  $view = new \Slim\Views\PhpRenderer('view/');
  return $view->render($response, 'home.php', ['basepath' => $request->getUri()->getBasePath()]   );
});

$app->run();
