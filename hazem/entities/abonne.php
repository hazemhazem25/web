<?php
class abonne
{

	private $adresse_mail;



	function __construct($adresse_mail){
		$this->adresse_mail=$adresse_mail;}

		function get_mail()
		{

			return $this->adresse_mail;
		}
}

?>