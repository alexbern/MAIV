<?php
session_start();
define('DS', DIRECTORY_SEPARATOR);
define('WWW_ROOT', __DIR__ . DS);

ini_set('display_errors', true);
error_reporting(E_ALL);

require_once WWW_ROOT . 'phpass' . DS . 'Phpass.php';

require WWW_ROOT . 'dao' . DS . 'UserDAO.php';
require WWW_ROOT . 'dao'. DS .'DeelnemersDAO.php';
require WWW_ROOT . 'vendor'. DS .'autoload.php';

$app = new \Slim\App(['settings' => [
  'displayErrorDetails' => true
  ]
]);

$app->get('/deelnemers', function ($request, $response, $args) {
  $view = new \Slim\Views\PhpRenderer('view/');
  $deelnemersDAO = new DeelnemersDAO();
  $deelnemers = $deelnemersDAO->selectAccepted();
  return $view->render($response, 'deelnemers.php', ['basepath' => $request->getUri()->getBasePath(), 'deelnemers'=> $deelnemers]);
});

//UPLOAD
$app->get('/upload', function ($request, $response, $args) {
  $view = new \Slim\Views\PhpRenderer('view/');
  if (empty($_SESSION['user'])) {
    $_SESSION['error'] = 'U moet inloggen om te uploaden.';
    return $response->withHeader('Location', $request->getUri()->getBasePath());
  }else{
    $userDAO = new UserDAO();
    $selectUser = $userDAO->selectById($_SESSION['user']['0']['id']);
    return $view->render($response, 'upload.php', ['basepath' => $request->getUri()->getBasePath(), 'user' => $selectUser]);
  }

});

$app->post('/upload', function ($request, $response, $args) {
  require WWW_ROOT . 'controllers/uploadPostController.php';
});

//DEELNEMEN
$app->get('/deelnemen', function ($request, $response, $args) {
  $view = new \Slim\Views\PhpRenderer('view/');
  $userDAO = new UserDAO();
  unset($_SESSION['error']);
  unset($_SESSION['info']);
  return $view->render($response, 'deelnemen.php', ['basepath' => $request->getUri()->getBasePath()]);
  unset($_SESSION['error']);
  unset($_SESSION['info']);
});

//LOGOUT
$app->get('/logout', function ($request, $response, $args) {
  if (!empty($_SESSION['user'])) {
    unset($_SESSION['user']);
    $_SESSION['info'] = 'Je bent afgemeld.';
  }

  return $response->withHeader('Location', '/');
});

//DEELNEMEN POST
$app->post('/deelnemen', function ($request, $response, $args) {
  require WWW_ROOT . 'controllers/deelnemenPostController.php';
});

//HOME
$app->get('/', function ($request, $response, $args) {
  $view = new \Slim\Views\PhpRenderer('view/');
  return $view->render($response, 'home.php', ['basepath' => $request->getUri()->getBasePath()]);
});

//ABOUT BOEK
$app->get('/boek', function ($request, $response, $args) {
  $view = new \Slim\Views\PhpRenderer('view/');
  return $view->render($response, 'boek.php', ['basepath' => $request->getUri()->getBasePath()]);
});

//CMS
$app->get('/admin', function ($request, $response, $args) {
  $view = new \Slim\Views\PhpRenderer('view/');
  return $view->render($response, 'cms.php', ['basepath' => $request->getUri()->getBasePath()]);
});

$app->post('/admin', function ($request, $response, $args) {
  $view = new \Slim\Views\PhpRenderer('view/');
  $data = $request->getParsedBody();
  $userDAO = new UserDAO();

   if (empty($data['admin-name'])) {
      $errors['admin-name'] = 'Invalid username.';
    }

    if (empty($data['admin-password'])) {
      $errors['admin-password'] = 'Password incorrect.';
    }

    if (!empty($errors)) {
        return $view->render($response, 'cms.php', ['basepath' => $request->getUri()->getBasePath(), 'errors' => $errors]);
        die();
    }

    $existingUser = $userDAO->selectByEmail($data['admin-name']);

     if (!empty($existingUser)) {
      $hasher = new \Phpass\Hash;
      if($hasher->checkPassword($data['admin-password'], $existingUser['0']['password'])){
          if (!empty($_SESSION['user'])) {
            unset($_SESSION['user']);
          }
          $_SESSION['user'] = $existingUser;
        }else{
          $_SESSION['error'] = 'Email of passwoord is incorrect.';
          return $view->render($response, 'cms.php', ['basepath' => $request->getUri()->getBasePath(), 'errors' => $errors]);
          die();
        }
     }else{
      $_SESSION['error'] = 'Email of passwoord is incorrect.';
          return $view->render($response, 'cms.php', ['basepath' => $request->getUri()->getBasePath(), 'errors' => $errors]);
          die();
     }

     if (empty($_SESSION['error'])) {
        $_SESSION['info'] = 'Login successful.';
        return $view->render($response, 'cms.php', ['basepath' => $request->getUri()->getBasePath()]);
        die();
      }

});

$app->get('/api', function ($request, $response, $args) {
  $deelnemersDAO = new DeelnemersDAO();
  $deelnemers = $deelnemersDAO->selectAll();
   $response = $response->write(json_encode($deelnemers))
    ->withHeader('Content-Type','application/json');
  if(empty($deelnemers)) {
    $response = $response->withStatus(404);
  }
  return $response;
});

$app->get('/api/{id}', function ($request, $response, $args) {
  $deelnemersDAO = new DeelnemersDAO();
  $deelnemer = $deelnemersDAO->selectById($args['id']);
   $response = $response->write(json_encode($deelnemer))
    ->withHeader('Content-Type','application/json');
  if(empty($deelnemer)) {
    $response = $response->withStatus(404);
  }
  return $response;
});

$app->delete('/api/{id}', function ($request, $response, $args) {
  $deelnemersDAO = new DeelnemersDAO();
  $deleteDeelnemer = $deelnemersDAO->delete($args['id']);
  return $response->write(true)
    ->withHeader('Content-Type','application/json');
});

$app->put('/api/{id}', function ($request, $response, $args) {
  $deelnemersDAO = new DeelnemersDAO();
  $updateDeelnemer = $deelnemersDAO->updateDeelnemer($args['id']);
  return $response->write(true)
    ->withHeader('Content-Type','application/json');
});

//404
$app->get('/{anything:.*}', function ($request, $response, $args) {
  $view = new \Slim\Views\PhpRenderer('view/');
  return $view->render($response, 'home.php', ['basepath' => $request->getUri()->getBasePath()]);
});

$app->run();
