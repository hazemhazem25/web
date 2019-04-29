<?php

if (isset($_POST['mail']))
{ $abonne = new abonneC();
$msg=$abonne->rechercherListeabonne($_POST['mail']);
echo $msg;

}

?>