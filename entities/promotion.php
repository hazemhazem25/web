<?php

class promotion
{
private $id_produit;
private $num_promotion;
private $titre;
private $remise;
private $date_ajout;
private $description;
private $image;
private $date_fin;
function __construct($id_produit,$titre,$remise,$date_ajout,$description,$image,$date_fin)
{

	$this->id_produit=$id_produit;
	$this->titre=$titre;
	$this->date_ajout=$date_ajout;
	$this->description=$description;
	$this->remise=$remise;
	$this->image=$image;
	$this->date_fin=$date_fin;
}

function getdate_fin()
{
return $this->date_fin;

}
function setdate_fin($date_fin)
 {
$this->date_fin=$date_fin;

 }
function getIdprod()
{
	return $this->id_produit;
}
function getImage()
{
	return $this->image;
}
function getNumprom()
{return $this->num_promotion;}
function getTitre()
{
	return $this->titre;
}

function getRemise()
{
	return $this->remise;
}
function getDate()
{
	return $this->date_ajout;
}
function getDesc()
{return $this->description;}
 function setIdprod($id_produit)
 {
 	$this->id_produit=$id_produit;
 }
function setNumprom($num_promotion)
{
	$this->num_promotion=$num_promotion;
}

function setRemise($remise)
{
	$this->remise=$remise;
}
function setDate($date_ajout)
{
	$this->date_ajout=$date_ajout;
}
function setTitre($titre)
{
$this->titre=$titre;

}
function setDesc($description)
{
	$this->description=$description;
}

}

?>