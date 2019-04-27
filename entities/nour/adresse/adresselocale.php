<?PHP
include "compte.php";
class compteCourant extends Compte{
	function __construct($num,$solde,$cin){
		parent::__construct($num,$solde,$cin);
	}
	
	
}
?>