<?PHP
include "../../../../core/produitC.php";
$produitC=new produitC();
if (isset($_POST["id_produit"])){
	$produitC->supprimerProduit($_POST["id_produit"]);
	header('Location: produits.php');
}

?>