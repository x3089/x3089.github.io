<?php
// Obtener la dirección IP del visitante
$visitor_ip = $_SERVER['REMOTE_ADDR']; 

// Registrar la IP en un archivo
$file = fopen("ips.txt", "a"); // Abre el archivo ips.txt en modo 'append' (agregar)
if ($file) {
    fwrite($file, $visitor_ip . "\n"); // Escribe la IP en el archivo
    fclose($file); // Cierra el archivo
}
?>
