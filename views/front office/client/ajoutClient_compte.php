<HTML>
<head>
</head>
<h1>Ajouter un client</h1>
<?PHP
include "../config.php";
include "../Core/ClienteCore.php";
$clienC=new ClientCore();
$listeClients=$clientC->afficherClients();

?>
<form>
<table>
<tr>
<td>ID</td>
<td><input type="number" name="id" id="id"></td>
</tr>
<tr>
<td>Nom</td>
<td><input type="text" name="nom" id="nom"></td>
</tr>
<tr>
<td>Prénom</td>
<td><input type="text" name="prenom" id="prenom"></td>
</tr>
<tr>
<td>Email</td>
<td><input type="Email" name="email" id="email"></td>
</tr>
<tr>
<td>Password</td>
<td><input type="Password" name="pwd" id="pwd"></td>
</tr>
<tr>
<td>Adresse</td>
<td><select id="adresse" name="adresse" onchange="chargerElt()">
<option></option>
<option value="cc">Tunis</option>
<option value="ce">Monastir</option>
<option value="ce">Sousse</option>
<option value="ce">Mehdia</option>
<option value="ce">Jerba</option>
<option value="ce">Sfax</option>
</select>
</td>
</tr>
<tr>
<td>Numéro</td>
<td><input type="number" name="numero" id="numero"></td>
</tr>
</tr>

<tr>
<td></td>
<td><input type="submit" name="creer" value="créer client"</td>
</tr>
</table>
</form>
</body>
</HTML>
<?PHP
if (isset($_GET['creer'])){
if ($_GET['typeClient']=="ce"){
include "../Entities/compteepargne.php";
include "../Core/CompteEpargneCore.php";
	//echo $_GET['cin'];
$compte= new compteEpargne($_GET['numcompte'],$_GET['solde'],$_GET['cin'],$_GET['taux']);
$compteECore=new CompteEpargneCore();
$type="compte epargne";
$compteECore->ajouterCompte($compte,$type);


//var_dump($compte);
}else{
	include "../Entities/comptecourant.php";
	include "../Core/CompteCourantCore.php";
$compte= new compteCourant($_GET['numcompte'],$_GET['solde'],$_GET['cin']);
$compteCourantCore=new CompteCourantCore();
$type="compte courant";
$compteCourantCore->ajouterCompte($compte,$type);


//var_dump($compte);
}
header('Location:listecomptes.php');

}

?>


	
	
