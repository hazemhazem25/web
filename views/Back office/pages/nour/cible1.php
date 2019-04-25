<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Mon super site</title>
</head>
<body>

	<?php 
	if (isset($_POST['vegetarien']))
		{
			echo $_POST['vegetarien'];
			echo '<p> Vous etes donc vegetarien </p>';

		}
		else
		{
			echo '<p>Vous n\'etes pas donc vegetarien, vous mangez de la viande</p>';
		}
	?>
</body>
</html>