<?PHP
include "config.php";
class eventC {
function afficherEvent ($event){
		echo "id_event: ".$event->getid()."<br>";
		echo "titre_event: ".$event->gettitre()."<br>";
		echo "image: ".$event->getimage()."<br>";
		echo "date_d_event: ".$event->getdated()."<br>";
		echo "date_f_event: ".$event->getdatef()."<br>";
		echo "desc_event: ".$event->getdesc()."<br>";
		echo "desc_event: ".$event->getdesc()."<br>";
		echo "adresse_event: ".$event->getadresse()."<br>";
		echo "type_event: ".$event->gettype()."<br>";
	}
	
	
	
	function afficherEvents(){
		//$sql="SElECT * From pub p inner join formationphp.pub a on p.id_pub= a.id_pub";
		$sql="SElECT * From event";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function afficherabonners(){
		//$sql="SElECT * From pub p inner join formationphp.pub a on p.id_pub= a.id_pub";
		$sql="SElECT * From abonne";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function ajouterabonne($abonne){
		$sql="insert into abonne (adresse_mail) values (:adresse_mail)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $adresse_mail=$abonne->get_mail();
		$req->bindValue(':adresse_mail',$adresse_mail);
	
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	function ajouterEvent($event){
		$sql="insert into event (titre_event,image,date_d_event,date_f_event,desc_event,adresse_event,type_event,nb) values (:titre_event,:image,:date_d_event,:date_f_event,:desc_event,:adresse_event,:type_event,:nb)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        
        $titre_event=$event->gettitre();
        $image=$event->getimage();
        $date_d_event=$event->getdated();
        $date_f_event=$event->getdatef();
        $desc_event=$event->getdesc();
        $adresse_event=$event->getadresse();
        $type_event=$event->gettype();
		
		$req->bindValue(':titre_event',$titre_event);
		$req->bindValue(':image',$image);
		$req->bindValue(':date_d_event',$date_d_event);
		$req->bindValue(':date_f_event',$date_f_event);
		$req->bindValue(':desc_event',$desc_event);
		$req->bindValue(':adresse_event',$adresse_event);
		$req->bindValue(':type_event',$type_event);
		$req->bindValue(':nb',0);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	function supprimerEvent($id_event){
		$sql="DELETE FROM event where id_event= :id_event";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_event',$id_event);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierEvent($event,$id_event){
		$sql="UPDATE event SET  titre_event=:titre_event,image=:image,date_d_event=:date_d_event,date_f_event=:date_f_event,desc_event=:desc_event,adresse_event=:adresse_event,type_event=:type_event WHERE id_event=:id_event";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
	
        $titre_event=$event->gettitre();
        $image=$event->getimage();
        $date_d_event=$event->getdated();
        $date_f_event=$event->getdatef();
        $desc_event=$event->getdesc();
        $adresse_event=$event->getadresse();
        $type_event=$event->gettype();
		$datas = array( ':id_event'=>$id_event, ':titre_event'=>$titre_event, ':image'=>$image,':date_d_event'=>$date_d_event,':date_f_event'=>$date_f_event,':desc_event'=>$desc_event,':adresse_event'=>$adresse_event,':type_event'=>$type_event);
		
		$req->bindValue(':id_event',$id_event);
		$req->bindValue(':titre_event',$titre_event);
		$req->bindValue(':image',$image);
		$req->bindValue(':date_d_event',$date_d_event);
		$req->bindValue(':date_f_event',$date_f_event);
		$req->bindValue(':desc_event',$desc_event);
		$req->bindValue(':adresse_event',$adresse_event);
		$req->bindValue(':type_event',$type_event);
		
		
            $s=$req->execute(); 
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
	}
	function recupererEvent($id_event){
		$sql="SELECT * from event where id_event=$id_event";
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