<?php
require_once 'database.php';

if (isset($_POST['form_insert'])) {
    $bdd = new Database();
    $pdo = $bdd->connexion();
    
    $sql = "INSERT INTO member (lastname, firstname, email, city) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_POST['lastname'], $_POST['firstname'], $_POST['email'], $_POST['city']]);
    
    header('Location: index.php');
    exit;
}
?>
