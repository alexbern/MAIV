<?php
$view = new \Slim\Views\PhpRenderer('view/');
$deelnemersDAO = new DeelnemersDAO();

if (empty($args['id'])) {
  $_SESSION['error'] = 'Oops, jouw deelname is niet geregistreerd!';
  exit();
}

$deleteId = $deelnemersDAO->delete($args['id']);

if (empty($deleteId)) {
  $_SESSION['error'] = 'Oops, jouw deelname is niet geregistreerd!';
  exit();
}

return $response->write(true)
    ->withHeader('Content-Type','application/json');
