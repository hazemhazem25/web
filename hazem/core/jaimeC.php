<?PHP
class jaimeC {

	function ajouter($jaime){
		$sql="insert into jaime (id_pub,id_client) values ( :id_pub,:id_client)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        
        $id_pub=$jaime->getid_pub();
        $id_client=$jaime->getid_client();
        
		
		$req->bindValue(':id_pub',$id_pub);
		$req->bindValue(':id_client',$id_client);
		
		
            $req->execute();
           
        }
        catch (Exception $p){
            echo 'Erreur: '.$p->getMessage();
        }
		
	}
	function supprimerPub($id_pub){
		$sql="DELETE FROM jaime where id_pub= :id_pub";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_pub',$id_pub);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $p){
            die('Erreur: '.$p->getMessage());
        }
	}
	function recuperer($id_pub,$id_client){
		$sql="SELECT * from jaime where id_pub=$id_pub and id_client=id_client";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $p){
            die('Erreur: '.$p->getMessage());
        }
	}
		


	
	
	
	
}

?>