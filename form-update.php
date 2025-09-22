<?php
function displayInfoMember()
{
    $bdd = new Database();
    $bdd->connexion();
    $id = $_GET['id'];

    $query = $bdd->getBdd()->prepare($bdd->selectMemberId());
    $array = array(
        'id' => $id
    );
    $query->execute($array);
    
    if ($data = $query->fetch()) {
        echo '<form action="member/update.php?id='.$data['id'].'" method="post">';
        echo '<input type="text" name="lastname_update" value="'.$data['lastname'].'" required/><br/><br/>';
        echo '<input type="text" name="firstname_update" value="'.$data['firstname'].'" required/><br/><br/>';
        echo '<input type="email" name="email_update" value="'.$data['email'].'" required/><br/><br/>';
        echo '<input type="text" name="city_update" value="'.$data['city'].'" required/><br/><br/>';
        echo '<input type="submit" name="form_update" value="Modifier" />';
        echo '</form>';
    } else {
        echo '<p>Aucun résultat n\'a été trouvé...</p>';
    }
    $query->closeCursor();
}
?>
