<?php
session_start();
?>
<html>
<head>
<title>Exemple MyArtiChow</title>
</head>
<body>
<a href="index2.php">Version sans anti-alias</a>
<?php
// Permet de lancer un traitement lorsque toutes les images sont chargées...
$checkStatImagesOnAllComplete = 'alert("Toutes les images sont chargées !");';

// Include avec toutes mes fonctions qui vont bien...
include('artichow-1.1.0/statistiques_include.php');


/****************************************************** LES CAMEMBERTS *****************************************************/

/*********   EXEMPLE 1 (simple)   **********/

// Titre du camembert
$title = "EXEMPLE 1 (simple) :";

// Largeur du camembert
$width = 750;

// Hauteur du camembert
$height = 400;

// Tableau des légendes
$legend = array('Titi','Toto','Tata','Les autres');

// Tabeau des valeurs
$data = array(38,28,7,37);

// On crée l'image
insertStatImage(1,$width,$height,$title,$legend,$data,'');

echo'</br></br>';

?>
</body>
</html>