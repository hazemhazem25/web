<?PHP 

include "../../core/produitC.php";
$pC=new produitC();

$id=$_GET['id_produit'];
$note=$_GET['note'];

$pC->ajouternote($id,$note);
header("Location:afficherProd.php?id=$id_produit")


?>