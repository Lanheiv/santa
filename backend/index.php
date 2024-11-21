<?php
include "Aircraft.php"; //Savieno ar Aircraft.php
include "Airport.php";
include "Flight.php";

/* function sask($x, $b){
    echo "<br>", $x + $b;
} //sask(5, 5); */

/* $aircraft = new Aircraft("Airbus", "A220-300", 120, 850);
    // var_dump($aircraft); //Izvad vērtību kas ir iekšā class
    
$origin = new Airport("TRI", 66.995, 25.971);
$destination = new Airport("RIX", 56.924, 23.971);

// Izveidojam lidojumu ar DateTime objektu
$departureTime = new DateTime('2024-11-21 15:30:00', new DateTimeZone('Europe/Riga'));  

// Izveidojam lidojumu
$flight = new Flight("SA503", $origin, $destination, $departureTime, $aircraft);

$flightDetails = $flight->getFlightDetails();

echo "<pre>";
print_r($flightDetails);
echo "</pre>"; */


$aircraft = new Aircraft("Airbus", "A220-300", 120, 850);
$origin = new Airport("TRI", 66.99, 25.971);  // Izlidošanas lidosta
$destination = new Airport("RIX", 56.924, 23.971);  // Galamērķa lidosta

$departureTime = new DateTime('', new DateTimeZone('Europe/Riga'));

$flight = new Flight("SA503", $origin, $destination, $departureTime, $aircraft);

// Izvada lidojuma detaļas
$flightDetails = $flight->getFlightDetails();

echo "<pre>";
print_r($flightDetails);

// Izvada attālumu un lidojuma ilgumu
echo "Distance: " . $flight->getDistance() . " km\n";
echo "Duration: " . $flight->getDuration() . " minutes\n";

echo "</pre>";
?>
``
