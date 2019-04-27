<?php

include "config.php";

class promotionC
{

	function ajouterpromo($promo){
		$sql="insert into promotion (id_produit,titre,remise,date_ajout,description,image,date_fin) values (:id_produit,:titre,:remise,:date_ajout,:description,:image,:date_fin)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		$image=$promo->getImage();
        $id_produit=$promo->getIdprod();
        $date_fin=$promo->getdate_fin();
        //$num_promotion=$promo->getNumprom();
        $titre=$promo->getTitre();
        $remise=$promo->getRemise();
        $date_ajout=$promo->getDate();
        $description=$promo->getDesc();
		$req->bindValue(':id_produit',$id_produit);
		//$req->bindValue(':num_promotion',$num_promotion);
		$req->bindValue(':titre',$titre);
				$req->bindValue(':date_fin',$date_fin);

		$req->bindValue(':date_ajout',$date_ajout);
		$req->bindValue(':remise',$remise);
		$req->bindValue(':description',$description);
		$req->bindValue(':image',$image);
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}



	function select_prod($num_promotion)
	{$sql="SElECT id_produit,remise From promotion where num_promotion=num_promotion";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	


	}
	function selectprix_prod($id_produit)
	{
$sql="SELECT * from produit where id_produit=$id_produit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	


	}
	function afficher()
	{
$sql="SELECT id_produit from produit ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	


	}
	function afficherpromo(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From promotion";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}


function supprimerpromo($num_promotion){
		$sql="DELETE FROM promotion where num_promotion= :num_promotion";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':num_promotion',$num_promotion);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}



	function modifierpromo($promotion,$num_promotion){
		$sql="UPDATE promotion SET id_produit=:id_produit,titre=:titre,remise=:remise,date_ajout=:date_ajout,description=:description, image=:image, date_fin=:date_fin WHERE num_promotion=:num_promotion";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$id_produit=$promotion->getIdprod();
$date_fin=$promotion->getdate_fin();
        $titre=$promotion->getTitre();
        $remise=$promotion->getRemise();
        $date_ajout=$promotion->getDate();
        $description=$promotion->getDesc();
		$image=$promotion->getImage();
		$datas = array(':id_produit'=>$id_produit,'num_promotion'=>$num_promotion,':titre'=>$titre,':remise'=>$remise,':date_ajout'=>$date_ajout,':description'=>$description,':image'=>$image,':date_fin'=>$date_fin);
		$req->bindValue(':id_produit',$id_produit);
				$req->bindValue(':num_promotion',$num_promotion);

		$req->bindValue(':titre',$titre);
		$req->bindValue(':remise',$remise);
		$req->bindValue(':date_ajout',$date_ajout);
		$req->bindValue(':description',$description);
				$req->bindValue(':image',$image);
		$req->bindValue(':date_fin',$date_fin);

		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}

	function recupererpromotion($num_promotion){
		$sql="SELECT * from promotion where num_promotion=$num_promotion";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function incrementationvupromotion($num_promotion,$nv){
		$sql="UPDATE promotion SET nbr_vue=:nbr_vue WHERE num_promotion=:num_promotion";		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		
		$datas = array('num_promotion'=>$num_promotion,':nbr_achat'=>$nv);
				$req->bindValue(':num_promotion',$num_promotion);
		$req->bindValue(':nbr_vue',$nv);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
	}
	

function recupererpromotion2($id_produit){
		$sql="SELECT * from promotion where id_produit=$id_produit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}


function recuperercmd2($id_produit){
		$sql="SELECT * from commande where id_produit=$id_produit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function recupererpr($id_produit){
		$sql="SELECT * from promotion where id_produit=$id_produit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function recuperercommande($id_produit){
		$sql="SELECT * FROM commande where id_produit=$id_produit ;";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function tablecount()
	{
$sql="SELECT  COUNT(*) from promotion";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);

		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }

	}
	function modifiernbr($num_promotion,$nbr_achat){
		$sql="UPDATE promotion SET nbr_achat=:nbr_achat WHERE num_promotion=:num_promotion";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
	
		$datas = array('num_promotion'=>$num_promotion,':nbr_achat'=>$nbr_achat);
				$req->bindValue(':num_promotion',$num_promotion);

		$req->bindValue(':nbr_achat',$nbr_achat);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}

function affichercmd()
{
	$sql="SElECT * From commande";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }

}

function pagination()
{
$db = config::getConnexion();

$videosParPage = 10;
$videosTotalesReq = $db->query('SELECT id_produit FROM  promotion');

return $videosTotalesReq;
}

	 }


function trier1($num_promotion,$date_ajout)
{
$sql="SElECT * From commande";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }

}
function trier2($id_produit,$remise)
{


}
?>