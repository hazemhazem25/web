<?PHP
include "../../../../core/commandeC.php";
$commandeC=new commandeC();
if (isset($_POST["numC"])){
	$commandeC->supprimerCommande($_POST["numC"]);
	header('Location: commande.php');
}

?>