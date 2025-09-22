<?php
require_once 'database.php';

$bdd = new Database();
$pdo = $bdd->connexion();
$stmt = $pdo->query("SELECT * FROM member");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Liste des membres</title>
    <style>
 table { border-collapse: collapse; margin: 20px 0; }
  td, th { border: 1px solid #ddd; padding: 8px; }
    </style>
</head>
<body>
    <h1>Liste des membres</h1>
    <a href="index.php">Retour à l'accueil</a><br><br>

    <table>
        <tr>
           <th>ID</th><th>Nom</th><th>Prénom</th><th>Email</th><th>Ville</th><th>Actions</th>
      </tr>
        <?php while ($row = $stmt->fetch()): ?>
        <tr>
    <td><?= $row['id'] ?></td>
   <td><?= $row['lastname'] ?></td>            <td><?= $row['firstname'] ?></td>
           <td><?= $row['email'] ?></td>
            <td><?= $row['city'] ?></td>
            <td>
               <a href="edit.php?id=<?= $row['id'] ?>">Modifier</a> | 
                <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Supprimer?')">Supprimer</a>
            </td>
        </tr>
  <?php endwhile; ?>
    </table>
</body>
</html>
