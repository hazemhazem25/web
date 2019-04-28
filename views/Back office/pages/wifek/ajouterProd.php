<?PHP
include "../../../../entities/produitt.php";
include "../../../../core/produitC.php";

if (isset($_POST['id_produit']) and isset($_POST['type_produit']) and isset($_POST['quantite']) and isset($_POST['disponibilite']) and isset($_POST['id_categorie']) and isset($_POST['marque'])and isset($_POST['pour'])and isset($_POST['prix'])and isset($_POST['description'])and isset($_POST['image'])){
$produit1=new produit($_POST['id_produit'],$_POST['type_produit'],$_POST['quantite'],$_POST['disponibilite'],$_POST['id_categorie'],$_POST['marque'],$_POST['pour'],$_POST['prix'],$_POST['description'],$_POST['image']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3

$produit1C=new ProduitC();
$produit1C->ajouterProduit($produit1);
header('Location: produits.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>