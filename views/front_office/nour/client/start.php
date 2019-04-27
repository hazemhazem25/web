<?PHP
include "../../Entities/client.php";
include "../../Core/ClientCore.php";
$client=new Client(757,'AHMED','Salah','salah.ahmed@esprit.tn','000','ariana',205);
$clientController=new ClientController();
$clientController->afficherClient($client);
echo "****************";
echo "<br>";
echo "id:".$client->getId();
echo "<br>";
echo "nom:".$client->getNom();
echo "<br>";
echo "prenom:".$client->getPrenom();
echo "<br>";
echo "email:".$client->getEmail();
echo "<br>";
echo "pwd:".$client->getPwd();
echo "<br>";
echo "adresse:".$client->getAdresse();
echo "<br>";
echo "numero:".$client->getNumero();
echo "<br>";
echo "le salaire est : ";
$clientController->calculerSalaire($client); 
echo "<br>";


?>