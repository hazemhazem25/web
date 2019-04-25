<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta  charset='utf-8' />
	<title> Mon super site</title>
</head>
<body>
	<p>
		<?php
		if (isset($_GET['nom']) AND isset($_GET['prenom']) AND isset($_GET['repeter']))
		 {
		 	$nbRepetitions= (int) $_GET['repeter'];
		 	if($nbRepetitions<8)
		 	{
			for ($i=1; $i <= $_GET['repeter'] ; $i++)
			 { 
				echo '<p> Bonjour '. $_GET['nom']. ' '. $_GET['prenom']. '</p>';
			}
		}
		}
			else
			{
				echo 'pas de nom ou de prenom ou de nombre de repetition définit!';
			}
			?>
		
	</p>

</body>
</html>