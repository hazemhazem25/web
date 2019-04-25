<?PHP
class Client{
	private $id;
	private $nom;
	private $prenom;
	private $email;
	private $numero;
	private $adresse;
	private $nb_achat;
	function __construct($id,$nom,$prenom,$email,$numero,$adresse,$nb_achat){
		$this->id=$id;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->email=$email;
		$this->numero=$numero;
		$this->adresse=$adresse;
		$this->nb_achat=$nb_achat;
	}
	
	function getId(){
		return $this->id;
	}
	function getNom(){
		return $this->nom;
	}
	function getPrenom(){
		return $this->prenom;
	}
	function getEmail(){
		return $this->email;
	}
	function getNumero(){
		return $this->numero;
	}

	function getAdresse(){
		return $this->adresse;
	}
	function getNb_achat(){
		return $this->nb_achat;
	}



	function setNom($nom){
		$this->nom=$nom;
	}
	function setPrenom($prenom){
		$this->prenom=$prenom;
	}
	function setEmail($email){
		$this->email=$email;
	}
	function setNumero($numero){
		$this->numero=$numero;
	}
	function setAdresse($adresse){
		$this->adresse=$adresse;
	}
	function setNb_achat($nb_achat){
		$this->nb_achat=$nb_achat;
	}
	
}

?>