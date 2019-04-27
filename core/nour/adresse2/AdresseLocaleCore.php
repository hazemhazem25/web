<?PHP

include_once "AdresseCore.php";
class AdresseLocaleCore extends AdresseCore{


	function ajouterAdresse($adresse,$type){
		$req=parent::ajouterAdresse($adresse,$type);
		
		try{
		$req->bindValue(':num',0);
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
		$req->bindValue(':num',0);
		$req->bindValue(':type',$type);
        $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
	}

}
?>