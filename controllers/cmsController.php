<?php
$view = new \Slim\Views\PhpRenderer('view/');
$deelnemersDAO = new DeelnemersDAO();
$selectAll = $deelnemersDAO -> selectAll();

if (empty($selectAll)) {
  $_SESSION['error'] = 'Geen deelnemers gevonden!';
  exit();
}

if (empty($_SESSION['user'])) {
  $_SESSION['error'] = 'Geen gebruiker gevonden.';
}

return $view->render($response, 'cms.php', ['basepath' => $request->getUri()->getBasePath(), 'deelnemers'=>$selectAll]);
