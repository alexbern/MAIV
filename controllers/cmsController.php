<?php
$view = new \Slim\Views\PhpRenderer('view/');
$deelnemersDAO = new DeelnemersDAO();
$selectAll = $deelnemersDAO -> selectAll();

if (empty($selectAll)) {
  $_SESSION['error'] = 'Oops, jouw deelname is niet gevonden!';
  exit();
}

if (empty($_SESSION['user'])) {
  $_SESSION['error'] = 'Oops, jouw profiel werd niet gevonden';
}

return $view->render($response, 'cms.php', ['basepath' => $request->getUri()->getBasePath(), 'deelnemers'=>$selectAll]);
