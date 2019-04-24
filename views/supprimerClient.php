<?PHP
include "../core/clientC.php";
$clientC=new ClientC();
if (isset($_POST["cin"])){
	$clinetC->supprimerClient($_POST["cin"]);
	header('Location: http://localhost/git/web/views/afficherClient.php');
}

?>