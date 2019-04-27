<?PHP

include_once "AdresseCore.php";
class AdresseAutreCore extends AdresseCore{


	function ajouterAdresse($adresse,$type){
		$req=parent::ajouterAdresse($adresse,$type);
		
		try{
        $num=$adresse->getNum();
		$req->bindValue(':num',$num);
		$req->bindValue(':type',$type);
            return $req->execute();  
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
	}
	
	function updateAdresse($adresse,$type){
		$req=parent::updateAdresse($adresse,$type);
		
		try{
        
		$classement=$adresse->getClassement();
		$req->bindValue(':classement',$classement);
		$req->bindValue(':type',$type);
            $req->execute();  
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
	}


}
?>