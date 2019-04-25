<?php
/*
if(isset($_GET['nom']) AND isset($_GET['possesseur']) AND isset($_GET['console']) AND isset($_GET['prix']) AND isset($_GET['nbre_joueurs_max']) AND isset($_GET['commentaires']))
{


}
*/

	$bdd = new PDO('mysql:host=localhost;dbname=test', 'root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	$requete=$bdd->prepare('INSERT INTO jeux_video (nom, possesseur, console, prix, nbre_joueurs_max,commentaires) VALUES (?,?,?,?,?,?)');
	$requete->execute(array($_GET['nom'],$_GET['possesseur'],$_GET['console'],$_GET['prix'],$_GET['nbre_joueurs_max'],$_GET['commentaires']));


/*
if(isset($_GET['console']))
{
	$bdd = new PDO('mysql:host=localhost;dbname=test', 'root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	$requete=$bdd->prepare('INSERT INTO `jeux_video`(`nom`, `possesseur`, `console`, `prix`, `nbre_joueurs_max`, `commentaires`) VALUES '('last of us','nour','pc',60,2,'best');
	$requete->execute(array($_GET['console']));
	while ($donnees = $requete->fetch()) 
	{
		echo '<p>' . $donnees['console'] . ' - ' .$donnees['nom'].' - ' .$donnees['prix'].'£</p>';
	}

}
*/






/* affichage
$bdd = new PDO('mysql:host=localhost;dbname=test', 'root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$reponse=$bdd->query('SELECT console,nom,prix FROM jeux_video WHERE console="NES" OR console="pc" ORDER BY prix DESC LIMIT 5');
while ($donnees = $reponse->fetch()) 
{
	echo '<p>' . $donnees['console'] . ' - ' .$donnees['nom'].' - ' .$donnees['prix'].'£</p>';
}

*/



/* l'utilisateur entre qq donnees dans la barre d'adresse URL (requete preparee)
if(isset($_GET['console']))
{
	$bdd = new PDO('mysql:host=localhost;dbname=test', 'root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	$requete=$bdd->prepare('SELECT * FROM jeux_video WHERE console=?');
	$requete->execute(array($_GET['console']));
	while ($donnees = $requete->fetch()) 
	{
		echo '<p>' . $donnees['console'] . ' - ' .$donnees['nom'].' - ' .$donnees['prix'].'£</p>';
	}

}

*/
?>
