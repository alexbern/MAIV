<?php
    $view = new \Slim\Views\PhpRenderer('view/');
    $data = $request->getParsedBody();
    $userDAO = new UserDAO();
    $deelnemersDAO = new DeelnemersDAO();

    if (empty($_SESSION['user'])) {
      $_SESSION['error'] = 'U moet inloggen om te uploaden.';
      return $response->withHeader('Location', '/');
      exit();
      die();
    }

    $user = $userDAO->selectById($_SESSION['user']['0']['id']);

    $errors = array();

    if (empty($_FILES['upload-img']['name'])) {
      $errors['upload-img'] = 'Geen afbeelding gevonden.';
    }

    if (empty($_FILES['upload-review']['name'])) {
      $errors['upload-review'] = 'Geen review bestand gevonden.';
    }

    if (!empty($errors)) {
      $_SESSION['error'] = 'Upload niet geslaagd!';
      unset($_FILES);
      return $view->render($response, 'upload.php', ['basepath' => $request->getUri()->getBasePath(), 'errors' => $errors, 'user' => $user]);
      die();
      exit();
    }

    $id = $_SESSION['user']['0']['id'];

    if (!file_exists(WWW_ROOT . 'uploads' . DS . $id . DS)) {
      mkdir(WWW_ROOT . 'uploads' . DS . $id . DS);
    }

    $uploadDir = WWW_ROOT . 'uploads' . DS . $id . DS;

    $uploadImgfile = $uploadDir . basename($_FILES['upload-img']['name']);
    if (move_uploaded_file($_FILES['upload-img']['tmp_name'], $uploadImgfile)) {
      $_SESSION['info'] = "Danku voor uw deelname!";
    } else {
      $_SESSION['error'] = "File upload mislukt!";
      unset($_FILES);
      return $view->render($response, 'upload.php', ['basepath' => $request->getUri()->getBasePath(), 'errors' => $errors, 'user' => $user]);
      exit();
    }

    $uploadReviewfile = $uploadDir . basename($_FILES['upload-review']['name']);
    if (move_uploaded_file($_FILES['upload-review']['tmp_name'], $uploadReviewfile)) {
      $_SESSION['info'] = "Danku voor uw deelname!";
    } else {
      $_SESSION['error'] = "File upload mislukt!";
      unset($_FILES);
      return $view->render($response, 'upload.php', ['basepath' => $request->getUri()->getBasePath(), 'errors' => $errors, 'user' => $user]);
      exit();
    }

    $d = array(
      'id'=>$_SESSION['user']['0']['id'],
      'foto'=>$_FILES['upload-img']['name'],
      'review'=>$_FILES['upload-review']['name'],
      'status'=>0
    );

    $insert = $deelnemersDAO->insert($d);


    $_SESSION['info'] = 'Joepie! Je maakt nu kans op stapels boeken.';
    unset($_FILES);
    return $view->render($response, 'upload.php', ['basepath' => $request->getUri()->getBasePath(), 'errors' => $errors, 'user' => $user]);

