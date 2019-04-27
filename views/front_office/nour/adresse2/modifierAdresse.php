<?PHP
include "C:/wamp64/www/git/web/core/nour/adresse/AdresseAutreCore.php";
//include "../config.php";
$adresseC=new AdresseCore();
$adresseAM=$adresseC->getAdresse($_GET['classement']);
$listeAdresses=$adresseC->getAllAdresses();
//var_dump($compteAM->fetchAll());
$c=$adresseAM->fetchAll();
foreach($c as $row){}
?>
<html>
<head>
</head>
<body>
<form method='POST'>
<table>
<tr>
<td>Classement adresse</td>
<td><input type="number" name="classementadresse" value="<?PHP echo $_GET['classement'];  ?>" disabled></td>
</tr>
<tr>
<td>Id Client</td>
<td><input type="number" name="id1" value="<?PHP echo $row['id'];  ?>" disabled>
</td>
</tr>
<tr>
<td>Ville</td>
<td><input type="number" name="ville" value="<?PHP echo $row['ville'];  ?>"></td>
</tr>
<tr>
<td>Type adresse</td>
<td><select id="typeAdresse" name="typeAdresse" >
<option></option>
<option value="al">Adresse locale</option>
<option value="aa">Autre adresse</option>
</select>
</td>
</tr>
<tr>
<td>Classement</td>
<td><input type="number" name="classement" value="<?PHP echo $row['classement'];  ?>"></td>
</tr>
</tr>
<input type="hidden" value="<?PHP echo $row['classement']; ?>" name="classement">

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
	
	if ($_POST['typeAdresse']=="aa"){
		include "../Entities/adresseautre.php";
		include "../Core/AdresseAutreCore.php";
		$adresse= new adresseAutre($_POST['ad'],$_POST['ville'],$_POST['cite'],$_POST['rue'],$_POST['id'],$_POST['classement'],$_POST['num']);
		$adresseAutreCore=new AdresseAutreCore();
		$type="adresse autre";
		$adresseACore->updateAdresse($adresse,$type);
}

	if ($_POST['typeAdresse']=="al"){
		include "C:/wamp64/www/git/web/entities/nour/adresse/adresselocale.php";
include "C:/wamp64/www/git/web/core/nour/adresse/AdresseLocaleCore.php";

		$adresse= new adresseLocale($_POST['ad'],$_POST['ville'],$_POST['cite'],$_POST['rue'],$_POST['id'],$_POST['classement']);
		$adresseLocaleCore=new AdresseLocaleCore();
		$type="adresse locale";
		$adresseLocaleCore->updateAdresse($adresse,$type);

	}	
	
	header('Location:listeadresses.php');
	
}


?>