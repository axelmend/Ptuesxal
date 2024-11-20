<?php //conexion a bd ?>

<!DOCTYPE html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Administrador</title>
    <link rel="stylesheet" href="styleAdmin.css">
</head>

<header>
    <img src="imgs/umb_log.png" width="130" height="66">
</header>
<body>

<?php
    // Crear conexión a la base de datos
    include('conexionBD.php');

    // Iniciar la sesion
    session_start();

    // Verificar la conexión
    if (!$conn) {
        die("Conexión Fallida: " . mysqli_connect_error());
    }

    // Declara un array donde se guardaran los datos
    $admin = [
        'Matricula' => '',
        'Tipo' => '',
        'Nombre' => '',
        'Apaterno' => ''
    ];

    // Verificar si los datos de la sesión están disponibles
    if (isset($_SESSION['Matricula']) && isset($_SESSION['Tipo'])){

        // Obtener los datos de la sesión
        $matricula = $_SESSION['Matricula'];
        $tipo = $_SESSION['Tipo'];

        // Consulta para obtener el nombre y apellido del usuario autenticado
        $sql = "SELECT Nombre, Apaterno FROM usuarios WHERE Tipo = ? AND Matricula = ? ";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param("ss", $tipo, $matricula);
        $stmt -> execute();
        $result = $stmt -> get_result();

        if ($result -> num_rows > 0) {
            
            $admin = $result -> fetch_assoc();
            
        } else {
            $nombre = "Usuario";
            $apaterno = "";
        }
    }

    // Cerrar la conexión
    mysqli_close($conn);
    ?>

    <h2 class="encabezao">Bienvenid@ <?php echo $admin['Nombre'] . " " . $admin['Apaterno']; ?></h2>
    <h3 class="encabezao">¿Qué desea hacer?</h3>
    <div class="button-container">
        <a href="altaalumno.php" class="register-students">Registrar Alumnos</a>
        <a href="altausuarios.php" class="register-staff">Registrar Administrativos</a>
    </div>
    <a href="logout.php" class="out-btn">Cerrar Sesión</a>
</body>

</html>