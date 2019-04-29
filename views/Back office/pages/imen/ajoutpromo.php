
<?php
include "../../../../entities/imen/promotion.php";
include "../../../../core/imen/promotionC.php";
if ($_POST['idee']!=null and $_POST['num']!=null and $_POST['namee']!=null and $_POST['rem']!=null and $_POST['datee']!=null and $_POST['desc']!=null and $_POST['image']!=null) {
$promo1=new promotion($_POST['idee'],$_POST['num'],$_POST['namee'],$_POST['rem'],$_POST['datee'],$_POST['desc'],$_POST['image']);
echo $promo1->getIdprod();
$promo1C=new promotionC();
$promo1C->ajouterpromo($promo1);

header('Location: promotion1.php');
	
}

?>
