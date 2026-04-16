<?php
    $host = "localhost";  // Lo regresamos a localhost
    $user = "root";
    $clave = "sopasinstantaneas";  // Tu contraseña
    $bd = "sistemaredes";
    $puerto = 3307;       // Mantenemos tu puerto correcto

    // En PHP 8.1+, mysqli lanza excepciones. Usamos try-catch para capturarlas.
    try {
        $conexion = mysqli_connect($host, $user, $clave, $bd, $puerto);
        mysqli_set_charset($conexion,"utf8");
        // echo "¡Conexión exitosa!"; // Descomenta esto para comprobar que ya entra
    } catch (mysqli_sql_exception $e) {
        die("Error de conexión a la base de datos: " . $e->getMessage());
    }
?>