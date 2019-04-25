<?PHP
class jaime{
	private $id;
	private $id_pub;
	private $id_client;
	
	function __construct($id,$id_pub,$id_client){
		$this->id=$id;
		$this->id_pub=$id_pub;
		$this->id_client=$id_client;
		
	}
	
	function getid(){
		return $this->id_pub;
	}
	function getid_pub(){
		return $this->id_pub;
	}function getid_client(){
		return $this->id_client;
	}
    function setid($id){
		$this->id=$id;
	}
	function setid_pub($id_pub){
		$this->id_pub=$id_pub;
	}
	function setid_client($id_client){
		$this->id_client=$id_client;
	}
	
	
}

?>