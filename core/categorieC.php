<?PHP
require_once "config.php";
class CategorieC {
function afficherCategorie ($categorie){
		echo "id_categorie: ".$categorie->getId()."<br>";
		echo "nom_categorie: ".$categorie->getNom()."<br>";
		
	}
	
	function chercherCategorie($cat)
	{
		$q= $db->query("SElECT * from categorie WHERE nom_categorie like '$cat' ");
		$db = config::getConnexion();
		$q->execute();

		return $q;
	}

	function ajouterCategorie($categorie){
		$sql="insert into categorie (id_categorie,nom_categorie) values (:id_categorie, :nom_categorie)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id_categorie=$categorie->getId();
        $nom_categorie=$categorie->getNom();
		$req->bindValue(':id_categorie',$id_categorie);
		$req->bindValue(':nom_categorie',$nom_categorie);		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}

	function modifierCategorie($categorie,$id_categorie){
		$sql="UPDATE categorie SET id_categorie=:idc, nom_categorie=:nom_categorie WHERE id_categorie=:id_categorie";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idc=$categorie->getId();
        $nom_categorie=$categorie->getNom();
		$datas = array(':idc'=>$idc, ':id_categorie'=>$id_categorie, ':nom_categorie'=>$nom_categorie);
		$req->bindValue(':idc',$idc);
		$req->bindValue(':id_categorie',$id_categorie);
		$req->bindValue(':nom_categorie',$nom_categorie);
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}


	function afficherCategories(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From categorie";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
	function supprimerCategorie($id_categorie){
		$sql="DELETE FROM categorie where id_categorie= :id_categorie";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_categorie',$id_categorie);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function recupererCategorie($id_categorie){
		$sql="SELECT * from categorie where id_categorie=$id_categorie";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	
}

?>