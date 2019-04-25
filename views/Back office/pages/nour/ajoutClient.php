<?php
/*
Script "Questionnaire de satisfaction"
    Par M@teo21
    
Dernière modification : 20 août XXXX
*/

// On vérifie d'abord s'il n'y a pas de champ vide
if ($_POST['id'] == NULL OR $_POST['nom'] == NULL OR $_POST['prenom'] == NULL OR $_POST['email'] == NULL OR $_POST['numero'] == NULL OR $_POST['adresse'] == NULL OR $_POST['nb_achat'] == NULL)
{
    echo 'Tous les champs ne sont pas remplis !';
}
else // Si c'est bon, on enregistre les informations dans la base
{
    $bdd->prepare('INSERT INTO client VALUES (\'\', ?,?,?,?,?,?,?)');
    $bdd->execute(array($_POST['description'], $_POST['mail']));    
    
    // Puis on envoie les photos
    
    for ($numero = 1 ; $numero <= 3 ; $numero++)
    {
        if ($_FILES['photo' . $numero]['error'] == 0)
        {
            if ($_FILES['photo' . $numero]['size'] < 500000)
            {
                move_uploaded_file($_FILES['photo' . $numero]['tmp_name'], $numero . '.jpg');
            }
            else
            {
                echo 'La photo ' . $numero . 'n\'est pas valide.<br />';
                $probleme = true;
            }
        }
    }
    
    // Enfin, affichage d'un message de confirmation si tout s'est bien passé
    
    if (!(isset($probleme)))
    {
        echo 'Merci ! Les informations ont été correctement enregistrées !';
    }
}
?>