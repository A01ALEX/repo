<?php
$ciudades_capitales = array(
    "Italy" => "Rome", 
    "Luxembourg" => "Luxembourg", 
    "Belgium" => "Brussels", 
    "Denmark" => "Copenhagen", 
    "Finland" => "Helsinki", 
    "France" => "Paris", 
    "Slovakia" => "Bratislava", 
    "Slovenia" => "Ljubljana", 
    "Germany" => "Berlin", 
    "Greece" => "Athens", 
    "Ireland" => "Dublin", 
    "Netherlands" => "Amsterdam", 
    "Portugal" => "Lisbon", 
    "Spain" => "Madrid", 
    "Sweden" => "Stockholm", 
    "United Kingdom" => "London", 
    "Cyprus" => "Nicosia", 
    "Lithuania" => "Vilnius", 
    "Czech Republic" => "Prague", 
    "Estonia" => "Tallin", 
    "Hungary" => "Budapest", 
    "Latvia" => "Riga", 
    "Malta" => "Valetta", 
    "Austria" => "Vienna", 
    "Poland" => "Warsaw"
);

$numero_de_veces = 1;

ksort($ciudades_capitales);

for ($i = 0; $i < $numero_de_veces; $i++) {   
    $clave_aleatoria = array_rand($ciudades_capitales);
    echo "País: " . $clave_aleatoria . ", Capital: " . $ciudades_capitales[$clave_aleatoria] . "\n";
}
?>