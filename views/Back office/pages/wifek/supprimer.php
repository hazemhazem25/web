<?PHP
include "../../../../core/categorieC.php";
$categorieC=new categorieC();
if (isset($_POST["id_categorie"])){
	$categorieC->supprimerCategorie($_POST["id_categorie"]);
	header('Location: categorie.php');
}

?>