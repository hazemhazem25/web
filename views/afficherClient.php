<?PHP
include "../core/clientC.php";
//include "../core/ajoutClient.php";
$client1C=new clientC();
$listeClients=$client1C->afficherClients();

//var_dump($listeClients->fetchAll());
?>
<table border="1">
<tr>
<td>Id</td>
<td>Nom</td>
<td>Prenom</td>
<td>email</td>
<td>numero</td>
<td>adresse</td>
<td>nb_achat</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeClients AS $row){
	?>
	<tr>
	<td><?PHP echo $row['id']; ?></td>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['prenom']; ?></td>
	<td><?PHP echo $row['email']; ?></td>
	<td><?PHP echo $row['numero']; ?></td>
	<td><?PHP echo $row['adresse']; ?></td>
	<td><?PHP echo $row['nb_achat']; ?></td>
	<td><form method="POST" action="http://localhost/git/web/views/supprimerClient.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
	</form>
	</td>
	<td><a href="http://localhost/git/web/views/modifierClient.php?id=<?PHP echo $row['id']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>


