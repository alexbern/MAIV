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
        $errors['name'] = 'Vergeet uw naam niet.';
      }

      if (empty($data['email'])) {
        $errors['email'] = 'Vergeet uw email niet.';
      }

      if (empty($data['password'])) {
        $errors['password'] = 'Vergeet uw paswoord niet.';
      }

      if (empty($data['repeat-password'])) {
        $errors['repeat-password'] = 'Herhaal uw passwoord.';
      }

      if ($data['repeat-password'] !== $data['password']) {
        $errors['repeat-password'] = 'Uw paswoord matcht niet.';
      }

      if (empty($data['school'])) {
        $errors['school'] = 'Vergeet uw school niet.';
      }

      if (empty($data['klas'])) {
        $errors['klas'] = 'Vergeet uw klas niet.';
      }

      if (empty($data['gemeente'])) {
        $errors['gemeente'] = 'Vergeet uw gemeente niet.';
      }

      $existing = $userDAO->selectByEmail($data['email']);
      if (!empty($existing)) {
        $errors['email'] = 'Dat email is al in gebruik';
      }

      if (!empty($errors)) {
        $_SESSION['error'] = 'Oops! Een foutje!';
        return $view->render($response, 'deelnemen.php', ['basepath' => $request->getUri()->getBasePath(), 'errors' => $errors]);
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
          $_SESSION['info'] = 'Registratie gelukt!';
        }
      }

    }

    //STUFF VOOR LOGIN FORM
    if ($data['type-form'] == 'login') {

      if (empty($data['email'])) {
        $errors['login-email'] = 'Vergeet uw email niet.';
      }

      if (empty($data['password'])) {
        $errors['login-password'] = 'Vergeet uw paswoord niet.';
      }

      if (!empty($errors)) {
        $_SESSION['error'] = 'Oops! Een foutje!';
        return $view->render($response, 'deelnemen.php', ['basepath' => $request->getUri()->getBasePath(), 'errors' => $errors]);
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
          $_SESSION['error'] = 'Paswoord of email is incorrect.';
        }
      }else{
        $_SESSION['error'] = 'Paswoord of email is incorrect.';
      }

      if (empty($_SESSION['error'])) {
        $_SESSION['info'] = 'Succesvol ingelogd!';
        return $view->render($response, 'home.php', ['basepath' => $request->getUri()->getBasePath()]);
      }

    }

  }else{

  }
  return $view->render($response, 'deelnemen.php', ['basepath' => $request->getUri()->getBasePath()]);