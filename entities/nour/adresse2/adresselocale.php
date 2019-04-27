<?PHP
include "adresse.php";

class adresseLocale extends Adresse{
	function __construct($ad,$ville,$cite,$rue,$id,$classement){
		parent::__construct($ad,$ville,$cite,$rue,$id,$classement);
	}
	
	
}
?>