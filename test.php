<?php
include 'flotte.php';
// $clio = new Voiture ("Renault","clio",5);
// echo $clio->getMarque()."<br>";
// $clio -> demarrer();
// $clio ->accelerer(50);
// $clio ->accelerer(152);
// $clio -> getVitesse();
// $clio -> klaxonner();
// $clio -> freiner(49);
// echo "<br>";
// $golf = new Voiture ("Wolswagen","Golf",5);
// echo $golf->getMarque()."<br>";
// $golf -> demarrer();
// $golf ->accelerer(80);
// $golf ->accelerer(100);
// $golf -> getVitesse();
// $golf -> klaxonner();
// $golf -> freiner(179);
// echo "<br>";

$Tesla = new VoitureElectrique ("Tesla","model III",5,3);
echo $Tesla->getMarque()."<br>";
$Tesla -> demarrer();
$Tesla ->accelerer(50);
$Tesla ->accelerer(151);
$Tesla -> getVitesse();
$Tesla -> klaxonner();
$Tesla -> freiner(109);
echo "<br>";
//-----------------------------------------------------------------------------------------------

$flotte = [
    new Vehicule("Peugeot", "France Auto"),
    new Voiture("Clio", "Renault", 5),
    new Voiture("Golf", "Volkswagen", 3),
    new VoitureElectrique("Model 3", "Tesla", 4, 450),
];

foreach ($flotte as $auto) {
    echo get_class($auto).":   " ;
    echo $auto->getMarque()."<br>";
}








?>
