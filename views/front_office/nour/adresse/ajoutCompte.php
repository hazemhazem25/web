<HTML>
<head>
</head>
<h1>Ajouter un compte</h1>
<?PHP
include "../config.php";
include "../Core/EmployeCore.php";
$employeC=new EmployeCore();
$listeEmployes=$employeC->afficherEmployes();

?>
<form>
<table>
<tr>
<td>Num compte</td>
<td><input type="number" name="numcompte" id="numcompte"></td>
</tr>
<tr>
<td>Employe</td>
<td><select name="cin">
	<?PHP
foreach($listeEmployes as $row){
	?>
	<option value="<?PHP echo $row['cin']; ?>"><?PHP echo $row['nom'].'-'.$row['prenom']; ?>
	</option>
	<?PHP } ?>
</select> 
</td>
</tr>
<tr>
<td>Solde</td>
<td><input type="number" name="solde" id="solde"></td>
</tr>
<tr>
<td>Type compte</td>
<td><select id="typeCompte" name="typeCompte" onchange="chargerElt()">
<option></option>
<option value="cc">Compte courant</option>
<option value="ce">Compte epargne</option>
</select>
</td>
</tr>
<tr>
<td>Taux</td>
<td><input type="number" name="taux" id="taux"></td>
</tr>
</tr>

<tr>
<td></td>
<td><input type="submit" name="creer" value="créer compte"</td>
</tr>
</table>
</form>
</body>
</HTML>
<?PHP
if (isset($_GET['creer'])){
if ($_GET['typeCompte']=="ce"){
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