<?PHP
include "../../entities/abonne.php";
include "../../core/eventC.php";



if (isset($_POST['mail']) )
{
$abonne1=new abonne($_POST['mail']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$abonne1C=new eventC();
$abonne1C->ajouterabonne($abonne1);

header('Location: evenement.php');
	
}else{
echo "khra";}
//*/

?> 