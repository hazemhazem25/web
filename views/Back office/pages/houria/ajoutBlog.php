<?PHP
include "../../../../core/blogC.php";
include "../../../../entities/blog.php";

if ( isset($_POST['titreBlog']) and isset($_POST['description'])  and isset($_POST['imageBlog'])  and isset($_POST['marque'])){
$blog1=new blog($_POST['titreBlog'],$_POST['description'],$_POST['imageBlog'],$_POST['marque']);
//Partie2
/*
var_dump($blog1);
}
*/
//Partie3
$blog1C=new blogC();
$blog1C->ajouterblog($blog1);
header('Location: blog.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>