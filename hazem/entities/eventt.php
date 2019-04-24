<?PHP
class event{
	private $id_event;
	private $titre_event;
	private $image;
	private $date_d_event;
	private $date_f_event;
	private $desc_event;
	private $adresse_event;
	private $type_event;
	
	function __construct($id_event,$titre_event,$image,$date_d_event,$date_f_event,$desc_event,$adresse_event,$type_event){
		$this->id_event=$id_event;
		$this->titre_event=$titre_event;
		$this->image=$image;
		$this->date_d_event=$date_d_event;
		$this->date_f_event=$date_f_event;
		$this->desc_event=$desc_event;
		$this->adresse_event=$adresse_event;
		$this->type_event=$type_event;
	}
	
	function getid(){
		return $this->id_event;
	}
	function gettitre(){
		return $this->titre_event;
	}
	function getimage(){
		return $this->image;
	}
	function getdated(){
		return $this->date_d_event;
	}
	function getdatef(){
		return $this->date_f_event;
	}
	function getdesc(){
		return $this->desc_event;
	}
	function getadresse(){
		return $this->adresse_event;
	}
	function gettype(){
		return $this->type_event;
	}
    function setid($id_event){
		$this->id_event=$id_event;
	}
	function settitre($titre_event){
		$this->titre_event=$titre_event;
	}
	function setimage($image){
		$this->image=$image;
	}
	function setdated($date_d_event){
		$this->date_d_event=$date_d_event;
	}
	function setdatef($date_f_event){
		$this->date_f_event=$date_f_event;
	}
	function setdesc($desc_event){
		$this->desc_event=$desc_event;
	}
	function setadresse($adresse_event){
		$this->adresse_event=$adresse_event;
	}
	function settype($type_event){
		$this->type_event=$type_event;
	}
	
}

?>