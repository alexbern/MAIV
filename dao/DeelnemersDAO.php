<?php
require_once WWW_ROOT . 'dao' . DS . 'DAO.php';
class DeelnemersDAO extends DAO {

  public function selectAll() {
    $sql = "SELECT * FROM `deelnemers`
    INNER JOIN `users` ON deelnemers.user_id=users.id
    ORDER BY `status` ASC";
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
