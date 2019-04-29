<?php
include "../../../../entities/imen/abonne.php";
include "../../../../core/imen/abonneC.php";
$date=$_POST['date_a'];
$mail=$_POST['mail'];
if ($_POST['mail']!=null and $_POST['date_a']!=null and (date("Y-m-d")==$date) ) {
$abonne1=new abonne($_POST['mail']);
$abonne1->set_date($_POST['date_a']);
$abonne1C=new abonneC();
$abonne1C->ajouter_abonne2($abonne1);

header('Location: abonne.php');
	
}
else
{
	echo "erreur";
}

if($mail==null)
{
	header('Location: abonne.php');
}



?>