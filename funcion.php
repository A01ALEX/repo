<?php
$array_resultado = array(); 

$numero_de_elementos = 10;
$min = 1;
$max = 10;
inicializar_array($numero_de_elementos, $min, $max);
function inicializar_array($numero_de_elementos, $min, $max) {
    global $array_resultado; 
    
    for ($i = 0; $i < $numero_de_elementos; $i++) {
        $numero_randomico = rand($min, $max);
        array_push($array_resultado, $numero_randomico); 
    }
}


print_r($array_resultado);
?>