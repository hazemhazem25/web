<?PHP
include "../Core/CompteCore.php";
include "../config.php";
$compteC=new CompteCore();
$compteAM=$compteC->getCompte($_GET['num']);
$listeComptes=$compteC->getAllComptes();
//var_dump($compteAM->fetchAll());
$c=$compteAM->fetchAll();
foreach($c as $row){}
?>
<html>
<head>
</head>
<body>
<form method='POST'>
<table>
<tr>
<td>Num compte</td>
<td><input type="number" name="numcompte" value="<?PHP echo $_GET['num'];  ?>" disabled></td>
</tr>
<tr>
<td>Cin employe</td>
<td><input type="number" name="cin1" value="<?PHP echo $row['cin'];  ?>" disabled>
</td>
</tr>
<tr>
<td>Solde</td>
<td><input type="number" name="solde" value="<?PHP echo $row['solde'];  ?>"></td>
</tr>
<tr>
<td>Type compte</td>
<td><select id="typeCompte" name="typeCompte" >
<option></option>
<option value="cc">Compte courant</option>
<option value="ce">Compte epargne</option>
</select>
</td>
</tr>
<tr>
<td>Taux</td>
<td><input type="number" name="taux" value="<?PHP echo $row['taux'];  ?>"></td>
</tr>
</tr>
<input type="hidden" value="<?PHP echo $row['num']; ?>" name="num">

<tr>
<td></td>
<td><input type="submit" name="modifier" value="Modifier"</td>
</tr>
</table>
</form>
</body>
</HTML>

<?PHP
if (isset($_POST["modifier"])){
	
	if ($_POST['typeCompte']=="ce"){
		include "../Entities/compteepargne.php";
		include "../Core/CompteEpargneCore.php";
		$compte= new compteEpargne($_POST['num'],$_POST['solde'],$_POST['cin'],$_POST['taux']);
		$compteECore=new CompteEpargneCore();
		$type="compte epargne";
		$compteECore->updateCompte($compte,$type);
}

	else{
		include "../Entities/comptecourant.php";
		include "../Core/CompteCourantCore.php";
		$compte= new compteCourant($_POST['num'],$_POST['solde'],$_POST['cin']);
		$compteCourantCore=new CompteCourantCore();
		$type="compte courant";
		$compteCourantCore->updateCompte($compte,$type);

	}	
	
	header('Location:listecomptes.php');
	
}


?>