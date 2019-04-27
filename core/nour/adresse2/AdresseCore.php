<?PHP
include_once "C:/wamp64/www/git/web/core/nour/client/ClientCore.php";

class AdresseCore {

	function ajouterAdresse($adresse,$type){
		$sql="insert into adresse (ad,ville,cite,rue,id,classement,type,num) values (:ad,:ville,:cite,:rue,:id,:classement,:type,:num)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);

		$ad=$adresse->getAd();
        $ville=$adresse->getVille();
        $cite=$adresse->getCite();
        $classement=$adresse->getClassement();
        $rue=$adresse->getRue();
        $id=$adresse->getId();
   
		$req->bindValue(':ad',$ad);
		$req->bindValue(':ville',$ville);
		$req->bindValue(':cite',$cite);
		$req->bindValue(':classement',$classement);
		$req->bindValue(':rue',$rue);
		$req->bindValue(':id',$id);		
		    return $req;
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
	}

	function getAllAdresses(){
		$sql="SElECT * From adresse inner join client on adresse.id=client.id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function deleteAdresse($classement){
		$sql="DELETE FROM adresse where classement= :classement";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':classement',$classement);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function getAdresse($classement){
		$sql="SELECT * from adresse where classement=$classement";
		$db = config::getConnexion();
		try{
		$adresse=$db->query($sql);
		return $adresse;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function updateAdresse($adresse,$type){
		
		$sql="UPDATE `adresse` SET `ad` = :ad, `ville` = :ville, `cite` = :cite, `rue` = :rue, `type` = :type, `classement` = :classement WHERE `adresse`.`ad` = :ad";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        
        $ad=$adresse->getAd();
        $ville=$adresse->getVille();
        $cite=$adresse->getCite();
        $rue=$adresse->getRue();
        $classement=$adresse->getClassement();
   
		$req->bindValue(':ad',$ad);
		$req->bindValue(':ville',$ville);
		$req->bindValue(':cite',$cite);
		$req->bindValue(':rue',$rue);
		$req->bindValue(':classement',$classement);
				
		    return $req;
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
	}
}
?>