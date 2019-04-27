<?php
require_once "config.php";
	class adminC
	{
		public function isAdmin($admin)
		{
			$login = $admin->get_login();
			$mdp = $admin->get_mdp();
			$c = config::getConnexion();
      		$stmt = $c->prepare("SELECT * FROM administrateur WHERE login_admin=:lp LIMIT 1");
     		$stmt->bindParam(':lp', $login);
     		$stmt->execute();
     		$count = $stmt->rowCount();
     		if ($count == 0)
     		{
     			return "Ce compte n'existe pas";
     		}
     		$result = $stmt->fetchAll();
     		foreach ($result as $row)
     		{
     			$pass = $row['mdp_admin'];
     			if (hash('sha256', $mdp) == $pass)
     			{
     				$admin->set_id($row['id_admin']);
     				$admin->set_nom($row['nom_admin']);
     				$admin->set_pre($row['pre_admin']);
     				header('Location: index.php');
     				return 1;
     			}
     			else
     			{
     				return "Mot de passe incorrect";
     			}
     		}
		}
	}
?>