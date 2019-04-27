<?PHP
include "../../../../core/imen/abonneC.php";
$abonneC=new abonneC();
if (isset($_POST["adresse_mail"])){
	$abonneC->supprimerabonne($_POST["adresse_mail"]);
	header('Location: abonne.php');
}

?>