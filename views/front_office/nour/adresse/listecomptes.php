<?PHP
include "../Core/CompteCore.php";
include "../config.php";
$compteC=new CompteCore();
$listeComptes=$compteC->getAllComptes();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>Numéro</td>
<td>Cin</td>
<td>Nom et prénom</td>
<td>Solde</td>
<td>Taux</td>
<td>Type</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeComptes as $row){
	?>
	<tr>
	<td><?PHP echo $row['num']; ?></td>
	<td><?PHP echo $row['cin']; ?></td>
	<td><?PHP echo $row['nom'].' '.$row['prenom']; ?></td>
	<td><?PHP echo $row['solde']; ?></td>
	<td><?PHP echo $row['taux']; ?></td>
	<td><?PHP echo $row['type']; ?></td>
	<td><form method="POST">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" name="num" value="<?PHP echo $row['num'];  ?>">
	</form>
	</td>
	<td><a href="modifierCompte.php?num=<?PHP echo $row['num']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}

if (isset($_POST["supprimer"])){
	$compteC->deleteCompte($_POST["num"]);
	header('Location:listecomptes.php');
}
?>
</table>

<a href="ajoutCompte.php"> Ajouter Compte </a>


