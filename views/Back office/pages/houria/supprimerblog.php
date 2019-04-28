<?PHP
include "../../../../core/blogC.php";
$blogC=new blogC();
if (isset($_POST["numBlog"])){
	$blogC->supprimerblog($_POST["numBlog"]);
	header('Location: blog.php');
}

?>