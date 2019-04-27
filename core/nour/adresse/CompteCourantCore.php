<?PHP

include_once "CompteCore.php";
class CompteCourantCore extends CompteCore{


	function ajouterCompte($compte,$type){
		$req=parent::ajouterCompte($compte,$type);
		
		try{
		$req->bindValue(':taux',0);
		$req->bindValue(':type',$type);
            return $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
	}
	
	function updateCompte($compte,$type){
		$req=parent::updateCompte($compte,$type);
		
		try{
		$req->bindValue(':taux',0);
		$req->bindValue(':type',$type);
        $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
	}

}
?>