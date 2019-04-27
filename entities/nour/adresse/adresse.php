<?PHP
class compte{
	protected $numCompte;
	protected $solde;
	protected $cin;
	
	function __construct($num,$solde,$cin){
		$this->numCompte=$num;
		$this->solde=$solde;
		$this->cin=$cin;

	}
	function getNumCompte(){
		return $this->numCompte;
	}
	function setNumCompte($num){
		$this->numCompte=$num;
	}
	function getSolde(){
		return $this->solde;
	}
	function setSolde($solde){
		$this->solde=$solde;
	}
	function getCin(){
		return $this->cin;
	}
	function setCin($cin){
		$this->cin=$cin;
	}
	
}

?>