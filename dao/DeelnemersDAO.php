<?php
require_once WWW_ROOT . 'dao' . DS . 'DAO.php';
class DeelnemersDAO extends DAO {

  public function selectAll() {
   $sql = "SELECT deelnemers.id, deelnemers.foto, deelnemers.review, deelnemers.status, users.naam, users.school, users.klas, users.gemeente, users.email FROM `deelnemers`
    INNER JOIN `users` ON  users.id = deelnemers.user_id";
   $stmt = $this->pdo->prepare($sql);
   $stmt->execute();
   return $stmt->fetchAll(PDO::FETCH_ASSOC);
 }

  public function selectById($id) {
    $sql = "SELECT * FROM `deelnemers` WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectAccepted() {
   $sql = "SELECT deelnemers.id, deelnemers.user_id, deelnemers.foto, deelnemers.review, deelnemers.status, users.naam, users.school, users.klas, users.gemeente, users.email FROM `deelnemers`
    INNER JOIN `users` ON  users.id = deelnemers.user_id WHERE `status` = 1";
   $stmt = $this->pdo->prepare($sql);
   $stmt->execute();
   return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectAcceptedLast() {
   $sql = "SELECT deelnemers.id, deelnemers.user_id, deelnemers.foto, deelnemers.review, deelnemers.status, users.naam, users.school, users.klas, users.gemeente, users.email FROM `deelnemers`
    INNER JOIN `users` ON  users.id = deelnemers.user_id WHERE `status` = 1 LIMIT 3";
   $stmt = $this->pdo->prepare($sql);
   $stmt->execute();
   return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function updateDeelnemer($id) {
    $sql = "UPDATE `deelnemers` SET `status`= 1 WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->execute();
  }

  public function delete($id) {
    $sql = "DELETE FROM `deelnemers` WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    return $stmt->execute();
  }

  public function insert($data){
        $errors = $this->getValidationErrors($data);
        if(empty($errors)) {
          $sql = "INSERT INTO `deelnemers` (`user_id`, `foto`, `review`, `status`)
            VALUES (:user_id, :foto, :review, :status)";
          $stmt = $this->pdo->prepare($sql);
          $stmt->bindValue(':user_id', $data['id']);
          $stmt->bindValue(':foto', $data['foto']);
          $stmt->bindValue(':review', $data['review']);
          $stmt->bindValue(':status', $data['status']);
          if($stmt->execute()) {
            $insertedId = $this->pdo->lastInsertId();
            return $this->selectById($insertedId);
          }
        }
        return false;
      }

  public function getValidationErrors($data) {
        $errors = array();
        if(empty($data['id'])) {
          $errors['user_id'] = 'please enter the id';
        }
        if(empty($data['foto'])) {
          $errors['foto'] = 'please enter the foto';
        }
        if(!isset($data['review'])) {
          $errors['review'] = 'please enter the review';
        }
        if(!isset($data['status'])) {
          $errors['status'] = 'please enter status state';
        }
        return $errors;
      }

}
