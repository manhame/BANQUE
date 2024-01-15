<h1>Application Banque<h1>

<?php

include "./Titulaire.php";
include "./Compte.php";


$t1 = new Titulaire("Manuel","HAMEL","02-04-1968","Sarrebourg");

$c1= new Compte ("Compte courant",0,"€",$t1);
$c2= new Compte ("Compte épargne",0,"€",$t1);


$t1->afficherComptes();
?>

<h2>Virement du compte courant au compte épargne<h2>

<?php
$c1->virer(50,$c2);
$t1->afficherComptes();

/* 
$c1 -> crediter(100);
echo "Le compte a été crédité, le nouveau solde est de : ".$c1 -> getSoldeInitial()." € <br>";

$c1 -> debiter(60);
echo "Le compte a été débité, le nouveau solde est : ".$c1 -> getSoldeInitial()." € <br>";
*/



