<?PHP

include "C:/wamp64/www/git/web/entities/nour/client/client.php";
include 'C:/wamp64/www/git/web/core/config.php';
include "C:/wamp64/www/git/web/core/nour/client/ClientCore.php";

if (isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['email']) and isset($_POST['pwd']) and isset($_POST['adresse']) and isset($_POST['numero']))
{
$client1=new client($_POST['id'],$_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['pwd'],$_POST['adresse'],$_POST['numero']);


//Partie2
/*
var_dump($client);
}
*/
//Partie3
$client1Controller=new ClientCore();
$client1Controller->ajouterClient($client1);
//header('Location: http://localhost/git/web/views/front_office/nour/client/afficherClient.php');
header('Location: http://localhost/git/web/views/front_office/nour/client/profil.php');

	
}
else{
	echo "vérifier les champs";
}
//*/
/*
$bdd = new PDO('mysql:host=localhost;dbname=web', 'root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
*/
?>


	
	
