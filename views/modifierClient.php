<HTML>
<head>
</head>
<body>
<?PHP
include "../core/clientC.php";
if (isset($_GET['id'])){
	$clientC=new ClientC();
    $result=$clientC->recupererClient($_GET['id']);
	foreach($result as $row){
		$id=$row['id'];
		$nom=$row['nom'];
		$prenom=$row['prenom'];
		$email=$row['email'];
		$numero=$row['numero'];
		$adresse=$row['adresse'];
		$nb_achat=$row['nb_achat'];
?>
<form method="POST">
<table>
<caption>Modifier Client</caption>
<tr>
<td>ID</td>
<td><input type="number" name="id" value="<?PHP echo $id ?>"></td>
</tr>
<tr>
<td>Nom</td>
<td><input type="text" name="nom" value="<?PHP echo $nom ?>"></td>
</tr>
<tr>
<td>Prenom</td>
<td><input type="text" name="prenom" value="<?PHP echo $prenom ?>"></td>
</tr>
<tr>
<td>Email</td>
<td><input type="text" name="email" value="<?PHP echo $email ?>"></td>
</tr>
<tr>
<td>Numero</td>
<td><input type="number" name="numero" value="<?PHP echo $numero ?>"></td>
</tr>
<tr>
<td>Adresse</td>
<td><input type="text" name="adresse" value="<?PHP echo $adresse ?>"></td>
</tr>
<tr>
<td>Nombre d'achat</td>
<td><input type="number" name="nb_achat" value="<?PHP echo $nb_achat ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="id_ini" value="
	<?PHP
 echo $_GET['id']; 
?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$client=new client($_POST['id'],$_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['numero'],$_POST['adresse'],$_POST['nb_achat']);
	$clientC->modifierClient($client,$_POST['id_ini']);
	echo $_POST['id_ini'];
	header('Location: http://localhost/git/web/views/afficherClient.php');
}
?>
</body>
</HTMl>