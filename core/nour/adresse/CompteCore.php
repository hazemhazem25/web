<?PHP
class CompteCore {

	function ajouterCompte($compte,$type){
		$sql="insert into compte (num,solde,cin,taux,type) values (:num,:solde,:cin,:taux,:type)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $cin=$compte->getCin();
        $num=$compte->getNumCompte();
        $solde=$compte->getSolde();
   
		$req->bindValue(':num',$num);
		$req->bindValue(':solde',$solde);
		$req->bindValue(':cin',$cin);		
		    return $req;
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
	}

	function getAllComptes(){
		$sql="SElECT * From compte inner join employe on compte.cin=employe.cin";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function deleteCompte($num){
		$sql="DELETE FROM compte where num= :num";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':num',$num);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function getCompte($num){
		$sql="SELECT * from compte where num=$num";
		$db = config::getConnexion();
		try{
		$compte=$db->query($sql);
		return $compte;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function updateCompte($compte,$type){
		
		$sql="UPDATE `compte` SET `solde` = :solde, `taux` = :taux, `type` = :type WHERE `compte`.`num` = :num";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        
        $num=$compte->getNumCompte();
        $solde=$compte->getSolde();
   
		$req->bindValue(':num',$num);
		$req->bindValue(':solde',$solde);
				
		    return $req;
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
	}
}
?>