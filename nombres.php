<?php
$global_nombres = array("Sofía", "Alejandro", "Valentina", "Martín", "Isabella", "Diego", "Camila", "Lucas", "Gabriela", "Mateo");
$global_apellidos = array("García", "Rodríguez", "Martínez", "López", "Pérez", "González", "Hernández", "Sánchez", "Ramírez", "Torres");

function generar_nombre_apellido() {
    global $global_nombres, $global_apellidos;
    return $global_nombres[array_rand($global_nombres)] . " " . $global_apellidos[array_rand($global_apellidos)];
}

function generar_nombres_completos($numero_de_veces) {
    $nombres = array();
    for ($i = 0; $i < $numero_de_veces; $i++) {
        $nombres[] = generar_nombre_apellido();
    }
    return $nombres;
}

$nombres_generados = generar_nombres_completos(rand(1, 10));
foreach ($nombres_generados as $nombre) {
    echo $nombre . "\n";
}
?>
