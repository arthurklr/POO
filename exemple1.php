<?php
require "chien.php";

// Instanciation de la classe Chien : $milou est un objet de la classe "Chien"
$milou = new Chien("Milou", "caniche");

var_dump($milou);                             // Description de l'objet $milou

echo "<div>".$milou->nomChien."</div>";       // Affichage de l'attribut "nomChien"
echo "<div>".$milou->race."</div><br>";       // Affichage de l'attribut "race"

$milou->race = "fox-terrier";                 // Modification de l'attribut "race"

echo $milou->description();                   // Affichage de la méthode "description"