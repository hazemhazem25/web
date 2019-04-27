<?PHP
include "C:/wamp64/www/git/web/core/nour/client/ClientCore.php";
$clientController=new ClientCore();
if (isset($_POST["id"])){
	$clientController->supprimerClient($_POST["id"]);
	header('Location: afficherClient.php');
}

?>