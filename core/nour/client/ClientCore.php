<?PHP
include_once "C:/wamp64/www/git/web/core/config.php";
class ClientCore {
function afficherClient ($client){
        echo "Id: ".$client->getId()."<br>";
        echo "Nom: ".$client->getNom()."<br>";
        echo "Prénom: ".$client->getPrenom()."<br>";
        echo "Email: ".$client->getEmail()."<br>";
        echo "Password: ".$client->getPwd()."<br>";
        echo "Adresse: ".$client->getAdresse()."<br>";
         echo "Numéro: ".$client->getNumero()."<br>";
    }

        function calculerSalaire($client){
        echo $client->getNumero() * $client->getId();
    }
    
    function ajouterClient($client){

        $sql="insert into client (id,nom,prenom,email,pwd,adresse,numero) values (:id,:nom,:prenom,:email,:pwd,:adresse,:numero)";
        $bdd = config::getConnexion();
        try{
        $req=$bdd->prepare($sql);
        
        $id=$client->getId();
        $nom=$client->getNom();
        $prenom=$client->getPrenom();
        $email=$client->getEmail();
        $pwd=$client->getPwd();
        $adresse=$client->getAdresse();
        $numero=$client->getNumero();
        $req->bindValue(':id',$id);
        $req->bindValue(':nom',$nom);
        $req->bindValue(':prenom',$prenom);
        $req->bindValue(':email',$email);
        $req->bindValue(':pwd',$pwd);
        $req->bindValue(':adresse',$adresse);
        $req->bindValue(':numero',$numero);
        
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
        
    }
    
    function afficherClients(){
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
    function supprimerClient($id){
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
        $sql="UPDATE client SET id=:idd, nom=:nom,prenom=:prenom,email=:email, pwd=:pwd, adresse=:adresse,numero=:numero WHERE id=:id";
        
        $db = config::getConnexion();
        //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{        
        $req=$db->prepare($sql);
        $idd=$client->getId();
        $nom=$client->getNom();
        $prenom=$client->getPrenom();
        $email=$client->getEmail();
        $pwd=$client->getPwd();
        $adresse=$client->getAdresse();
        $numero=$client->getNumero();
        $datas = array(':idd'=>$idd, ':id'=>$id, ':nom'=>$nom,':prenom'=>$prenom, ':email'=>$email, ':pwd'=>$pwd, ':adresse'=>$adresse, ':numero'=>$numero);
        $req->bindValue(':idd',$idd);
        $req->bindValue(':id',$id);
        $req->bindValue(':nom',$nom);
        $req->bindValue(':prenom',$prenom);
        $req->bindValue(':email',$email);
        $req->bindValue(':pwd',$pwd);
        $req->bindValue(':adresse',$adresse);
        $req->bindValue(':numero',$numero);
        
        
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

        function rechercherListeClients($adress){
        $sql="SELECT * from client where adresse=$adress";
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