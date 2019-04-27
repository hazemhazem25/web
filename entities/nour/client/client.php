<?PHP
class Client{
	private $id;
	private $nom;
	private $prenom;
	private $email;
	private $pwd;
	private $adresse;
	private $numero;
	function __construct($id,$nom,$prenom,$email,$pwd,$adresse,$numero){
		$this->id=$id;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->email=$email;
		$this->pwd=$pwd;
		$this->adresse=$adresse;
		$this->numero=$numero;
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
	function getPwd(){
		return $this->pwd;
	}

	function getAdresse(){
		return $this->adresse;
	}
	function getNumero(){
		return $this->numero;
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
	function setPwd($pwd){
		$this->pwd=$pwd;
	}
	function setAdresse($adresse){
		$this->adresse=$adresse;
	}
	function setNumero($numero){
		$this->numero=$numero;
	}
	
}



?>