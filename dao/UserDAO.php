<?php
require_once WWW_ROOT . 'dao' . DS . 'DAO.php';
class UserDAO extends DAO {

  public function selectAll() {
    $sql = "SELECT * FROM `users`";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function insert($data){
        $errors = $this->getValidationErrors($data);
            if(empty($errors)) {
          $sql = "INSERT INTO `users` (`email`, `password`, `naam`, `school`, `klas`, `gemeente`, `is_admin`)
                  VALUES (:email, :password, :naam, :school, :klas, :gemeente :is_admin)";
          $stmt = $this->pdo->prepare($sql);
          $stmt->bindValue(':email', $data['email']);
          $stmt->bindValue(':password', $data['password']);
          $stmt->bindValue(':naam', $data['naam']);
          $stmt->bindValue(':school', $data['school']);
          $stmt->bindValue(':klas', $data['klas']);
          $stmt->bindValue(':gemeente', $data['gemeente']);
          $stmt->bindValue(':is_admin', $data['is_admin']);
          if($stmt->execute()) {
            $insertedId = $this->pdo->lastInsertId();
            return $this->selectById($insertedId);
          }
        }
        return false;
      }


    public function getValidationErrors($data) {
        $errors = array();
        if(empty($data['email'])) {
          $errors['email'] = 'please enter the email';
        }
        if(empty($data['password'])) {
          $errors['password'] = 'please enter the password';
        }
        if(!isset($data['is_admin'])) {
          $errors['is_admin'] = 'please enter admin state';
        }
        if(!isset($data['naam'])) {
          $errors['naam'] = 'please enter name state';
        }
        if(!isset($data['school'])) {
          $errors['school'] = 'please enter school state';
        }
        if(!isset($data['klas'])) {
          $errors['klas'] = 'please enter klas state';
        }
        if(!isset($data['gemeente'])) {
          $errors['gemeente'] = 'please enter gemeente state';
        }
        return $errors;
      }
}
