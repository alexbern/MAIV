<?php

$view = new \Slim\Views\PhpRenderer('view/');
$deelnemersDAO = new DeelnemersDAO();
$selectAll = $deelnemersDAO -> selectAll();

if (empty($selectAll)) {
  $_SESSION['error'] = 'Geen deelnemers gevonden!';
  exit();
}

// echo '<pre>';
// print_r($selectAll);
// echo '</pre>';

  return $view->render($response, 'cms.php', ['basepath' => $request->getUri()->getBasePath(), 'deelnemers'=>$selectAll]);
