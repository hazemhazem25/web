<?PHP
include "../../../../core/promotionC.php";
$promoC=new promotionC();
if (isset($_POST["num_promotion"])){
	$promoC->supprimerpromo($_POST["num_promotion"]);
	header('Location: promotion1.php');
}

?>