<?php

// Establecer un formato de salida claro para leer fácilmente
header('Content-Type: text/plain; charset=utf-8');

echo "--- INICIO DEL DIAGNÓSTICO ---\n\n";

// 1. Verificar la ruta actual del archivo
$directorioActual = __DIR__;
echo "1. El script se está ejecutando desde la carpeta:\n" . $directorioActual . "\n\n";

// 2. Comprobar si la carpeta 'vendor' existe en este directorio
$rutaVendor = $directorioActual . '/vendor';
echo "2. Comprobando la existencia de la carpeta 'vendor' en la ruta:\n" . $rutaVendor . "\n";
if (file_exists($rutaVendor) && is_dir($rutaVendor)) {
    echo "   RESULTADO: ¡ÉXITO! La carpeta 'vendor' existe.\n\n";
} else {
    echo "   RESULTADO: ¡FALLO! La carpeta 'vendor' NO existe o no es un directorio.\n\n";
}

// 3. Comprobar si el archivo 'autoload.php' existe dentro de 'vendor'
$rutaAutoload = $rutaVendor . '/autoload.php';
echo "3. Comprobando la existencia del archivo 'autoload.php' en la ruta:\n" . $rutaAutoload . "\n";
if (file_exists($rutaAutoload) && is_file($rutaAutoload)) {
    echo "   RESULTADO: ¡ÉXITO! El archivo 'autoload.php' existe.\n\n";
} else {
    echo "   RESULTADO: ¡FALLO! El archivo 'autoload.php' NO existe o no es un archivo.\n\n";
}

// 4. Listar todos los archivos y carpetas en el directorio actual para ver qué hay realmente
echo "4. Contenido real de la carpeta '" . $directorioActual . "':\n";
$contenido = scandir($directorioActual);
print_r($contenido);

echo "\n--- FIN DEL DIAGNÓSTICO ---\n";

?>