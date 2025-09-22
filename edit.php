<?php
require_once 'database.php';

$bdd = new Database();
$pdo = $bdd->connexion();

// Afficher le formulaire pré-rempli
if (!isset($_POST['form_update'])) {
    $id = $_GET['id'];
    $stmt = $pdo->prepare("SELECT * FROM member WHERE id = ?");
    $stmt->execute([$id]);
    $member = $stmt->fetch();
    ?>
    
    <!DOCTYPE html>
    <html>
    <head><title>Modifier membre</title></head>
    <body>
        <h1>Modifier le membre</h1>
        <form method="post">
            <input type="text" name="lastname" value="<?= $member['lastname'] ?>" required><br>
            <input type="text" name="firstname" value="<?= $member['firstname'] ?>" required><br>
            <input type="email" name="email" value="<?= $member['email'] ?>" required><br>
            <input type="text" name="city" value="<?= $member['city'] ?>" required><br>
            <input type="hidden" name="id" value="<?= $member['id'] ?>">
            <input type="submit" name="form_update" value="Modifier">
        </form>
        <a href="liste.php">Retour</a>
    </body>
    </html>
    <?php
} else {
    // Traitement de la modification
    $stmt = $pdo->prepare("UPDATE member SET lastname=?, firstname=?, email=?, city=? WHERE id=?");
    $stmt->execute([$_POST['lastname'], $_POST['firstname'], $_POST['email'], $_POST['city'], $_POST['id']]);
    
    header('Location: liste.php');
    exit;
}
?>
