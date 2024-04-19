<?php

$global_nombres = array("Sofía", "Alejandro", "Valentina", "Martín", "Isabella", "Diego", "Camila", "Lucas", "Gabriela", "Mateo");
$global_apellidos = array("García", "Rodríguez", "Martínez", "López", "Pérez", "González", "Hernández", "Sánchez", "Ramírez", "Torres");

function nombres_completos($n_elementos) {
    global $global_nombres, $global_apellidos;
    $nombres_completos = array();

    for ($i = 0; $i < $n_elementos; $i++) {
        $nombre = $global_nombres[array_rand($global_nombres)];
        $apellido = $global_apellidos[array_rand($global_apellidos)];
        $nombre_completo = $nombre . ' ' . $apellido;
        $nombres_completos[] = $nombre_completo;
    }

    return $nombres_completos;
}

print_r(nombres_completos(15));

?>
