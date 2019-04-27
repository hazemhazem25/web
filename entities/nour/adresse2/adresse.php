<?PHP
class adresse{

	protected $ad;
	protected $ville;
	protected $cite;
	protected $rue;
	protected $id;
	protected $classement;
	
	function __construct($ad,$ville,$cite,$rue,$id,$classement){

		$this->ad=$ad;
		$this->ville=$ville;
		$this->cite=$cite;
		$this->rue=$rue;
		$this->id=$id;
		$this->classement=$classement;

	}

	function getAd(){
		return $this->ville;
	}
	function setAd($ad){
		$this->ad=$ad;
	}
	function getVille(){
		return $this->ville;
	}
	function setVille($ville){
		$this->ville=$ville;
	}
	function getCite(){
		return $this->cite;
	}
	function setCite($cite){
		$this->cite=$cite;
	}
	function getRue(){
		return $this->rue;
	}
	function setRue($rue){
		$this->rue=$rue;
	}
		function getId(){
		return $this->id;
	}
	function setId($id){
		$this->id=$id;
	}
		function getClassement(){
		return $this->classement;
	}
	function setClassement($classement){
		$this->classement=$classement;
	}
	
}

?>