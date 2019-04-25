<?PHP
include "../config.php";
include "../entities/client.php";
class clientC {
function afficherClient ($client){
        echo "Id: ".$client->getId()."<br>";
        echo "Nom: ".$client->getNom()."<br>";
        echo "Prénom: ".$client->getPrenom()."<br>";
        echo "Email: ".$client->getEmail()."<br>";
        echo "Numéro: ".$client->getNumero()."<br>";
            echo "Adresse: ".$client->getAdresse()."<br>";
        echo "Nombre d'achat ".$client->getNb_achat()."<br>";
    }
    
    function ajouterClient($client){


        $sql="INSERT INTO client (id,nom,prenom,email,numero,adresse,nb_achat) VALUES (:id,:nom,:prenom,:email,:numero,:adresse,:nb_achat)";
        $sql="INSERT INTO client (nom,prenom,email,numero,adresse,nb_achat) VALUES (?,?,?,?,?,?)";
        $bdd = config::getConnexion();
        try{
        $req=$bdd->prepare($sql);
        
        $id=$client->getId();
        $nom=$client->getNom();
        $prenom=$client->getPrenom();
        $email=$client->getEmail();
        $numero=$client->getNumero();
        $adresse=$client->getAdresse();
        $nb_achat=$client->getNb_achat();
        $req->bindValue(':id',$id);
        $req->bindValue(':nom',$nom);
        $req->bindValue(':prenom',$prenom);
        $req->bindValue(':email',$email);
        $req->bindValue(':adresse',$adresse);
        $req->bindValue(':nb_achat',$nb_achat);
        /*
        $req->execute(array($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['numero'],$_POST['adresse'],$_POST['nb_achat']));*/
        
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
        
    }
    
    function afficherClients(){
        //$sql="SElECT * From client e inner join formationphp.client a on e.cin= a.cin";
        $sql="SElECT * From client";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }
    function supprimerclient($id){
        $sql="DELETE FROM client where id= :id";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id',$id);
        try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function modifierClient($client,$id){
        $sql="UPDATE client SET id=:idd, nom=:nom,prenom=:prenom,email=:email,numero=:numero, adresse:adresse, nb_achat:nb_achat, WHERE id=:id";
        
        $db = config::getConnexion();
        //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{        
        $req=$db->prepare($sql);
        $idd=$client->getId();
        $nom=$client->getNom();
        $prenom=$client->getPrenom();
        $email=$client->getEmail();
        $numero=$client->getNumero();
        $adresse=$client->getAdresse();
        $nb_achat=$client->getNb_achat();
        $datas = array(':idd'=>$idd, ':id'=>$id, ':nom'=>$nom,':prenom'=>$prenom,':email'=>$email,':numero'=>$numero, ':nb_achat'=>$nb_achat);
        $req->bindValue(':idd',$idd);
        $req->bindValue(':id',$id);
        $req->bindValue(':nom',$nom);
        $req->bindValue(':prenom',$prenom);
        $req->bindValue(':email',$email);
        $req->bindValue(':numero',$numero);
        $req->bindValue(':adresse',$adresse);
        $req->bindValue(':nb_achat',$nb_achat);
        
        
            $s=$req->execute();
            
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
        
    }
    function recupererClient($id){
        $sql="SELECT * from client where id=$id";
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