<?php
include "Aircraft.php"; //Savieno ar Aircraft.php
include "Airport.php";
include "Flight.php";

//echo "Hello world";

function sask($x, $b){
    echo "<br>", $x + $b;
} //sask(5, 5);

            //Lidmašīnas
$manalidene = new Aircraft("Airbus", "A220-300", 120, 850);
var_dump($manalidene); //Izvad vērtību kas ir iekšā class

echo "<br>";

            //Lidosta
$destination = new Airport("RIX", 56.924, 23.971);
var_dump($destination);

            //AI part 
$origin = "Rīga";
$destination = "London";
$departureTime = new DateTime("2024-11-20 15:30:00", new DateTimeZone("Europe/Riga"));
$aircraft = "Boeing 737";
            
$flight = new Flight("SA503", $origin, $destination, $departureTime, $aircraft);
$flight->displayFlightInfo();
            