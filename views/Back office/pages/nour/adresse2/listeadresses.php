<?PHP
include "C:/wamp64/www/git/web/core/nour/adresse/AdresseCore.php";
//include "../config.php";
$adresseC=new AdresseCore();
$listeAdresses=$adresseC->getAllAdresses();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>#</td>
<td>Nom et prénom</td>
<td>Classement</td>
<td>Ville</td>
<td>Cité</td>
<td>Rue</td>
<td>Type</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeAdresses as $row){
	?>
	<tr>

	<td><?PHP echo $row['ad']; ?></td>
	<td><?PHP echo $row['nom'].' '.$row['prenom']; ?></td>
	<td><?PHP echo $row['classement']; ?></td>
	<td><?PHP echo $row['ville']; ?></td>
	<td><?PHP echo $row['cite']; ?></td>
	<td><?PHP echo $row['rue']; ?></td>
	<td><?PHP echo $row['num']; ?></td>
	<td><form method="POST">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" name="classement" value="<?PHP echo $row['classement'];  ?>">
	</form>
	</td>
	<td><a href="modifierAdresse.php?classement=<?PHP echo $row['classement']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}

if (isset($_POST["supprimer"])){
	$adresseC->deleteAdresse($_POST["classement"]);
	header('Location:listearesses.php');
}
?>
</table>

<a href="ajoutAdresse.php"> Ajouter Adresse </a>


