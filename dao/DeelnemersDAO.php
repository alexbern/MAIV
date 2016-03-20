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

}
