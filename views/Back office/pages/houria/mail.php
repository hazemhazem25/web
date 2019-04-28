<?php

include "../../../..//entities/commande.php";
include "../../../../core/commandeC.php";
    $commandeC=new commandeC();

if (isset($_POST['modifier'])){
   // $commande=new commande($_POST['totalC'],$_POST['dateCreation'],$_POST['etatC'],);
    $commandeC->modifiercommande($_POST['etatC'],$_POST['numC_ini']);
    echo $_POST['numC_ini'];
    if (isset($_GET['numC']))
{

 $commandeCc=new commandeC();
 $a=$commandeCc-> recuperercommande($_GET['numC']);
  foreach ($a as $row) 
  {
   $res=$commandeCc->selectclient($row['id_client']);
   var_dump($row['id_client']);
   echo $row['id_client'];
   foreach ($res as $b) {

if(mail($b['user_email'], 'etat de votre commande','votre commande est '.$_POST['etatC']))
{

    echo "jawww barcha msataaa";
}


   }


}}
    header('Location: commande.php');
}
?>