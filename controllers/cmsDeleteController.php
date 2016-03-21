<?php
$view = new \Slim\Views\PhpRenderer('view/');
$deelnemersDAO = new DeelnemersDAO();

if (empty($args['id'])) {
  $_SESSION['error'] = 'Deelnemer niet gevonden.';
  exit();
}

$deleteId = $deelnemersDAO->delete($args['id']);

if (empty($deleteId)) {
  $_SESSION['error'] = 'Deelnemer niet gevonden.';
  exit();
}

return $response->write(true)
    ->withHeader('Content-Type','application/json');
