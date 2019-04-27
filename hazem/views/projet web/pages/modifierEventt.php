<?php
include "../../../entities/eventt.php";
include "../../../core/eventC.php";
$dated=$_POST['date_d_event'];
$datef=$_POST['date_f_event'];
$titre=$_POST['titre_event'];
$desc=$_POST['desc_event'];
$type=$_POST['type_event'];
if (isset($_POST['modifier']) and ($dated < $datef) and (strlen($titre)<20) and (strlen($desc)<50) and (strlen($type)<20)){
    $event1C=new eventC();
    $event= new event($_GET['id'],$_POST['titre_event'],$_POST['image'],$_POST['date_d_event'],$_POST['date_f_event'],$_POST['desc_event'],$_POST['adresse_event'],$_POST['type_event']);
    $event1C->modifierEvent($event,$_GET['id']);
        header('Location: event.php');
}
if (isset($_POST['modifier']) and ($dated > $datef) ){
    
        header('Location: event.php');
}
if (isset($_POST['modifier']) and (strlen($titre)>20) ){
    
        header('Location: event.php');
}
if (isset($_POST['modifier']) and (strlen($desc)>50) ){
    
        header('Location: event.php');
}
if (isset($_POST['modifier']) and (strlen($type)>20) ){
    
        header('Location: event.php');
}