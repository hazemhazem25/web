<?PHP
include "compte.php";

class compteEpargne extends Compte{
	private $tauxInteret;
	function __construct($num,$solde,$cin,$taux){
		parent::__construct($num,$solde,$cin);
		$this->tauxInteret=$taux;
	}
	
	function getTaux(){
		return $this->tauxInteret;
	}
	function setTaux($taux){
		$this->tauxInteret=$taux;
	}

	
}
?>