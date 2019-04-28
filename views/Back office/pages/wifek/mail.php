<?php

if (isset($_POST['emailto']) and isset($_POST['subject']) and isset($_POST['message']))
{ 
	//echo $_POST['emailto'];

// To send HTML mail, the Content-type header must be set
 
	mail($_POST['emailto'],$_POST['subject'],$_POST['message']);
	echo"mail envoye";
	header("location:produits.php");
}else
{ echo "khra wma skhoun";

	# code...
}

?>