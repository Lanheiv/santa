<?php
include "Aircraft(1).php";
include "Airport(1).php";
include "Flight(1).php";

$lidmasina = new Aircraft("Airbus", "A220-300", 120, 850);
$sakums = new Airport("TRI", 66.99, 25.971);  // Sākums
$beigas = new Airport("RIX", 56.924, 23.971);  // Galamērķis
$departureTime = new DateTime('', new DateTimeZone('Europe/Riga')); // Laika josla, tagadējais laiks

$lidojums = new Flight("SA503", $sakums, $beigas, $departureTime, $lidmasina);

print_r($lidojums);

echo "Attālims: " . $lidojums->iegutgarumu();
echo "Liks: " . $lidojums->iegutlaiku();
?>
