<?PHP
class produit{
	private $id_produit;
	private $type_produit;
	private $quantite;
	private $disponibilite;
	private $id_categorie;
	private $marque;
	private $pour;
	private $prix;
	private $description;
	private $image;
	
	function __construct($id_produit,$type_produit,$quantite,$disponibilite,$id_categorie,$marque,$pour,$prix,$description,$image){
		$this->id_produit=$id_produit;
		$this->type_produit=$type_produit;
		$this->quantite=$quantite;
		$this->disponibilite=$disponibilite;
		$this->id_categorie=$id_categorie;
		$this->marque=$marque;
		$this->pour=$pour;
		$this->prix=$prix;
		$this->description=$description;
		$this->image=$image;
	}
	
	function getIdp(){
		return $this->id_produit;
	}
	function getType(){
		return $this->type_produit;
	}
	function getQuantite(){
		return $this->quantite;
	}
	function getDispo(){
		return $this->disponibilite;
	}
	function getIdc(){
		return $this->id_categorie;
	}
	function getMarque(){
		return $this->marque;
	}
	function getPour(){
		return $this->pour;
	}
	function getPrix(){
		return $this->prix;
	}
	function getDesc(){
		return $this->description;
	}
	function getImg(){
		return $this->image;
	}

	
	function setType(){
		  $this->type_produit=$type_produit;
	}
	function setQuantite(){
		  $this->quantite=$quantite;
	}
	function setDispo(){
		  $this->disponibilite=$disponibilite;
	}
	function setMarque(){
		  $this->marque=$marque;
	}
	function setPour(){
		  $this->pour=$pour;
	}
	function setPrix(){
		  $this->prix=$prix;
	}
	function setDesc(){
		  $this->description=$description;
	}
	function setImg(){
		  $this->image=$image;
	}

	
}

?>


