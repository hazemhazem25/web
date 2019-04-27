<HTML>
<head>
</head>
<h1>Ajouter une adresse</h1>
<?PHP
//include_once "../config.php";
include "C:/wamp64/www/git/web/core/nour/adresse/AdresseCore.php";

$clientC=new ClientCore();
$listeClients=$clientC->afficherClients();

?>
<form>
<table>
	<tr>
<td>Client</td>
<td><select name="id">
	<?PHP
foreach($listeClients as $row){
	?>
	<option value="<?PHP echo $row['id']; ?>"><?PHP echo $row['nom'].'-'.$row['prenom']; ?>
	</option>
	<?PHP } ?>
</select> 
</td>
</tr>
<tr>

<td>Adresse</td>
<td><select id="typeAdresse" name="typeAdresse" onchange="chargerElt()">
<option></option>
<option value="al">Adresse locale</option>
<option value="aa">Autre adresse</option>
</select>
</tr>
<tr>
<td>Ad</td>
<td><input type="number" name="ad" id="ad"></td>
</td>
</tr>
<tr>
<td>Ville</td>
<td><input type="text" name="ville" id="ville"></td>
</td>
</tr>
<tr>
<td>Cite</td>
<td><input type="text" name="cite" id="cite"></td>
</td>
</tr>
<tr>
<td>rue</td>
<td><input type="text" name="rue" id="rue"></td>
</tr>
<tr>
<td>Classement</td>
<td><input type="number" name="classement" id="classement"></td>
</tr>
<tr>
<td>Num</td>
<td><input type="number" name="num" id="num"></td>
</tr>
</tr>

<tr>
<td></td>
<td><input type="submit" name="creer" value="ajouter adresse"</td>
</tr>
</table>
</form>
</body>
</HTML>
<?PHP
if (isset($_GET['creer'])){
if ($_GET['typeAdresse']=="aa"){
include "C:/wamp64/www/git/web/entities/nour/adresse/adresseautre.php";
include "C:/wamp64/www/git/web/core/nour/adresse/AdresseAutreCore.php";
	//echo $_GET['cin'];
$adresse= new adresseAutre($_GET['ad'],$_GET['ville'],$_GET['cite'],$_GET['rue'],$_GET['id'],$_GET['classement'],$_GET['num']);
$adresseACore=new AdresseAutreCore();
$type="adresse autre";
$adresseACore->ajouterAdresse($adresse,$type);


//var_dump($adresse);
}else{
	include "C:/wamp64/www/git/web/entities/nour/adresse/adresselocale.php";
	include "C:/wamp64/www/git/web/core/nour/adresse/AdresseLocaleCore.php";
$adresse= new adresseLocale($_GET['ad'],$_GET['ville'],$_GET['cite'],$_GET['rue'],$_GET['id'],$_GET['classement']);
$adresseLocaleCore=new AdresseLocaleCore();
$type="adresse locale";
$adresseLocaleCore->ajouterAdresse($adresse,$type);


//var_dump($adresse);
}
header('Location:listeadresses.php');

}
?>