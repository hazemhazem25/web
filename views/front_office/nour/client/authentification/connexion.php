<html>
<head>
<meta charset="utf8">
</head>
<body>
<?php 
include 'User.php';
//$log="admin";
//$pwd="admin";
/*$servername="localhost";
	$username="root";
	$password="";
	$dbname="dblogin";
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", 
	$username, $password);
	$req="select * from users where user_name='$login' && user_pass='$pwd'";
	$rep=$conn->query($req);
	$res=$rep->fetchAll();
	*/
$c=new Database();
$conn=$c->connexion();
$user=new User($_POST['email'],$_POST['pwd'],$conn);
$u=$user->Logedin($conn,$_POST['email'],$_POST['pwd']);

	//var_dump($u);
//$logR=$_POST['email'];
//$pwdR=$_POST['pwd'];
$vide=false;
if (!empty($_POST['email']) && !empty($_POST['pwd'])){
	
	foreach($u as $t){
		$vide=true;
	if ($t['email']==$_POST['email'] && $t['pwd']==$_POST['pwd']){
		
		session_start();
		$_SESSION['n']=$_POST['nom'];
		$_SESSION['pr']=$_POST['prenom'];
		$_SESSION['e']=$_POST['email'];
		$_SESSION['p']=$_POST['pwd'];
		$_SESSION['r']=$t['role'];
		header("location:../../../index.php");
		
		}
	
}
if ($vide==false) { 
         // Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
         echo '<body onLoad="alert(\'Membre non reconnu...\')">'; 
         // puis on le redirige vers la page d'accueil
         echo '<meta http-equiv="refresh" content="0;URL=http://localhost/git/web/views/front_office/nour/client/authentification/se_connecter.php">'; 
      } 
}	  
 
else { 
      echo "Les variables du formulaire ne sont pas déclarées.<br> Vous devez remplir le formulaire"; 
     ?> <a href="http://localhost/git/web/views/front_office/nour/client/authentification/se_connecter.php">Retour au formulaire</a>	 <?php 
}  

?> 
</body>
</html>