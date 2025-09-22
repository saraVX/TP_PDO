<?php
require_once 'database.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Gestion Membres</title>
</head>
<body>
    <h1>Ajouter un membre</h1>
    <form action="insert.php" method="post">
        <input type="text" name="lastname" placeholder="Nom" required><br>
        <input type="text" name="firstname" placeholder="Prénom" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="text" name="city" placeholder="Ville" required><br>
        <input type="submit" name="form_insert" value="Insérer">
    </form>
    
    <br>
    <a href="liste.php">Voir la liste des membres</a>
</body>
</html>
