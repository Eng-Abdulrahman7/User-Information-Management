<?php
require 'db.php';  

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    $stmt = $pdo->prepare("UPDATE users SET status = CASE WHEN status = 0 THEN 1 ELSE 0 END WHERE id = ?");
    $stmt->execute([$id]);

    $status = $pdo->query("SELECT status FROM users WHERE id = $id")->fetchColumn();
    echo $status;
}
?>