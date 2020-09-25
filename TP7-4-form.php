<?php 

include 'TP7-4-class.php' ;

$myForm = new Form ("traitement.php","POST","Acces au site");
$myForm->setText('prenom','Entrer votre prenom');
$myForm->setText('nom','Entrer votre nom');
$myForm->setSubmit('envoyer','Enregistrement');



echo $myForm->getForm() ;

