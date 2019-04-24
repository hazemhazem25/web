<?PHP
include "../core/clientC.php";

if (isset($_POST['id']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['email']) and isset($_POST['numero']) and isset($_POST['adresse']) and isset($_POST['nb_achat']))
{
$client1=new client($_POST['id'],$_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['numero'],$_POST['adresse'],$_POST['nb_achat']);


//Partie2
/*
var_dump($client);
}
*/
//Partie3
$client1C=new clientC();
$client1C->ajouterClient($client1);
header('Location: http://localhost/git/web/views/afficherClient.php');
	
}
else{
	echo "vérifier les champs";
}
//*/
/*
$bdd = new PDO('mysql:host=localhost;dbname=web', 'root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
*/
?>


	
	
