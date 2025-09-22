<?php
require_once 'database.php';

if (isset($_GET['id'])) {
    $bdd = new Database();
    $pdo = $bdd->connexion();
    
    $stmt = $pdo->prepare("DELETE FROM member WHERE id = ?");
    $stmt->execute([$_GET['id']]);
}

header('Location: liste.php');
exit;
?>
