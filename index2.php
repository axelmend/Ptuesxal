<?php

session_start();
if (!isset ($_SESSION ['Tipo'])) {
    header ("Location: loginP.php");
    exit();
}

echo "Bienvenido, " . $_SESSION ['Tipo'];
?>

<!DOCTYPE html>
<html lang = "es">
    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
        <title>Dashboard</title>
    </head>
    <body>
        <h1>Bienvenido al Panel de Control </h1>
        <p>Aqui puedes administrar tus opciones.</p>
        <a href="logout.php">Cerrar sesion</a>
        <a href="altaalumno2.php">Registros exitentes</a>
    </body>

</html>