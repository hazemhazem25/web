

<?php


$bdd = new PDO('mysql:host=localhost;dbname=web', 'root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	$requete=$bdd->prepare('INSERT INTO client (nom, prenom, email, numero, adresse,nb_achat) VALUES (?,?,?,?,?,?)');
	$requete->execute(array($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['numero'],$_POST['adresse'],$_POST['nb_achat']));


?>