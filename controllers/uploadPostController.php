<?php
    $view = new \Slim\Views\PhpRenderer('view/');
    $data = $request->getParsedBody();

    $uploadImgDir = WWW_ROOT . 'uploads' . DS . 'images';
    $uploadReviewDir = WWW_ROOT . 'uploads'. DS . 'reviews';

    echo '<pre>';
    print_r($_FILES);
    echo '</pre>';

    $errors = array();

    if (empty($_FILES['upload-img'])) {
      $errors['upload-img'] = 'Geen afbeelding gevonden.';
    }

    if (empty($_FILES['upload-review'])) {
      $errors['upload-review'] = 'Geen review bestand gevonden.';
    }

    if (!empty($errors)) {
      $_SESSION['error'] = 'Upload niet geslaagd!';
      unset($_FILES);
      exit();
    }

    $uploadImgfile = $uploadImgDir . basename($_FILES['upload-img']['name']);
    if (move_uploaded_file($_FILES['upload-img']['tmp_name'], $uploadImgfile)) {
      $_SESSION['info'] = "Danku voor uw deelname!";
      echo 'success';
    } else {
      $_SESSION['error'] = "File upload mislukt!";
      exit();
      echo 'fail';
    }

    $uploadReviewfile = $uploadReviewDir . basename($_FILES['upload-review']['name']);
    if (move_uploaded_file($_FILES['upload-review']['tmp_name'], $uploadReviewfile)) {
      $_SESSION['info'] = "Danku voor uw deelname!";
      echo 'success';
    } else {
      $_SESSION['error'] = "File upload mislukt!";
      exit();
      echo 'fail';
    }
