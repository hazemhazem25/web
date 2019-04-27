<?PHP
include "adresse.php";

class adresseAutre extends Adresse{
	private $classementFavoris;
	function __construct($ad,$ville,$cite,$rue,$id,$classement,$num){
		parent::__construct($ad,$ville,$cite,$rue,$id,$classement,$num);
		$this->numFavoris=$num;
	}
	
	function getNum(){
		return $this->numFavoris;
	}
	function setTaux($taux){
		$this->numFavoris=$num;
	}

	
}
?>