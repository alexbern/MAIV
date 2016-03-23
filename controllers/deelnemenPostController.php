<?php

  $view = new \Slim\Views\PhpRenderer('view/');
  $data = $request->getParsedBody();
  $userDAO = new UserDAO();
  if (!empty($data['type-form'])) {

    //STUFF VOOR REGISTER FORM
    if ($data['type-form'] == 'register') {
      $data['is_admin'] = 0;
      unset($_SESSION['error']);
      unset($_SESSION['info']);
      $errors = array();

      if (empty($data['name'])) {
        $errors['name'] = 'Je hebt toch een naam?';
      }

      if (empty($data['email'])) {
        $errors['email'] = 'Heb je een e-mail?';
      }

      if (empty($data['password'])) {
        $errors['password'] = 'Vergeet je paswoord niet!';
      }

      if (empty($data['repeat-password'])) {
        $errors['repeat-password'] = 'Herhaal je je paswoord nog eens?';
      }

      if ($data['repeat-password'] !== $data['password']) {
        $errors['repeat-password'] = 'Jouw paswoord matcht niet.';
      }

      if (empty($data['school'])) {
        $errors['school'] = 'Op welke school werk je?';
      }

      if (empty($data['klas'])) {
        $errors['klas'] = 'Vergeet je klas niet!';
      }

      if (empty($data['gemeente'])) {
        $errors['gemeente'] = 'Vergeet je je gemeente niet!';
      }

      $existing = $userDAO->selectByEmail($data['email']);
      if (!empty($existing)) {
        $errors['email'] = 'Deze email is al in gebruik';
      }

      if (!empty($errors)) {
        $_SESSION['error'] = 'Oops! Een foutje!';
        return $response->withHeader('Location', '/deelnemen');
        exit();
      }

      if (empty($errors)) {
        $hasher = new \Phpass\Hash;
        $insertion = $userDAO->insert(array(
          'email' => $data['email'],
          'password' => $hasher->hashPassword($data['password']),
          'naam' => $data['name'],
          'school' => $data['school'],
          'klas' => $data['klas'],
          'gemeente' => $data['gemeente'],
          'is_admin' => $data['is_admin']
        ));
        if (!empty($insertion)) {
          $_SESSION['info'] = 'Je registratie is gelukt!';
        }
      }

    }

    //STUFF VOOR LOGIN FORM
    if ($data['type-form'] == 'login') {

      if (empty($data['email'])) {
        $errors['login-email'] = 'Vergeet je email niet!';
      }

      if (empty($data['password'])) {
        $errors['login-password'] = 'Vergeet je je passwoord niet?';
      }

      if (!empty($errors)) {
        $_SESSION['error'] = 'Oops! Een foutje!';
        return $response->withHeader('Location', '/deelnemen');
        exit();
      }

      $existingUser = $userDAO->selectByEmail($data['email']);

      if (!empty($existingUser)) {
        $hasher = new \Phpass\Hash;

        if($hasher->checkPassword($data['password'], $existingUser['0']['password'])){
          if (!empty($_SESSION['user'])) {
            unset($_SESSION['user']);
          }
          $_SESSION['user'] = $existingUser;
        }else{
          $_SESSION['error'] = 'Oh jee, jouw paswoord of email is incorrect. Geen paniek, probeer eens opnieuw?';
        }
      }else{
        $_SESSION['error'] = 'Oh jee, jouw paswoord of email is incorrect. Geen paniek, probeer eens opnieuw?';
      }

      if (empty($_SESSION['error'])) {
        $_SESSION['info'] = 'Je bent succesvol ingelogd!';
      }

    }

  }else{

  }
  return $view->render($response, 'deelnemen.php', ['basepath' => $request->getUri()->getBasePath(), 'errors' => $errors]);
