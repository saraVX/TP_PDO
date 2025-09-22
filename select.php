<?php
function listAllMember() { 
    $bdd = new Database(); 
    $bdd->connexion(); 
    $query = $bdd->getBdd()->query($bdd->selectAllMember());

    echo '<table>'; 
    echo '<tr>'; 
    echo '<th>Id</th>'; 
    echo '<th>Nom</th>'; 
    echo '<th>Prénom</th>'; 
    echo '<th>E-mail</th>'; 
    echo '<th>Ville</th>'; 
    echo '<th>Actions</th>'; 
    echo '</tr>';

    while ($data = $query->fetch()) { 
        echo '<tr>'; 
        echo '<td>'.$data['id'].'</td>'; 
        echo '<td>'.$data['lastname'].'</td>'; 
        echo '<td>'.$data['firstname'].'</td>'; 
        echo '<td>'.$data['email'].'</td>'; 
        echo '<td>'.$data['city'].'</td>'; 
        echo '<td>';
        echo '<a id="link_update_member" href="edit.php?id='.$data['id'].'">Modifier</a> '; 
        echo '<a id="link_delete" href="member/delete.php?id='.$data['id'].'">Supprimer</a>'; 
        echo '</td>'; 
        echo '</tr>'; 
    }

    echo '</table>'; 
    $query->closeCursor(); 
}
?>
