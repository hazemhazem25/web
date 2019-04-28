<?PHP
include "../../../../core/commandeC.php";
include "../../../../entities/commande.php";

if (isset($_POST['totalC']) and isset($_POST['adresseC'])  and isset($_POST['etatC'])){
$commande1=new commande($_POST['totalC'],$_POST['adresseC'],$_POST['etatC']);
//Partie2
/*
var_dump($commande1);
}
*/
//Partie3
$commande1C=new commandeC();
$commande1C->ajoutercommande($commande1);
header('Location: commande.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>