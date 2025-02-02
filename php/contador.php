<?php
$archivo = "contador.txt";

// Si el archivo no existe, lo crea con valor 0
if (!file_exists($archivo)) {
    file_put_contents($archivo, "0");
}

// Lee el número de visitas
$visitas = (int) file_get_contents($archivo);
$visitas++;

// Guarda el nuevo número en el archivo
file_put_contents($archivo, $visitas);

// Devuelve el número de visitas
echo $visitas;
?>
