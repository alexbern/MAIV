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

  public function delete($id) {
    $sql = "DELETE FROM `deelnemers` WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    return $stmt->execute();
  }

}
