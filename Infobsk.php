<?php 
// Crear conexión a la base de datos
include('conexionBD.php');

// Verificar la conexión
if (!$conn) {
    die("Conexión Fallida: " . mysqli_connect_error());
}

// Consulta para obtener la informacion de la base de datos
$query = "SELECT Nombre, Dia, Hora FROM talleres WHERE Id_talleres = 1";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $nombre = $row['Nombre'];
    $dia = $row['Dia'];
    $hora = $row['Hora'];
} else {
    $nombre = "";
    $dia = "";
    $hora = "";
}

// Cerrar la conexión
mysqli_close($conn);
?>

<!DOCTYPE html>
<head>

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller de Basquetbol</title>
    <link rel="stylesheet" href="styleinfotaller.css">
</head>


<body>
    <div class="recuadro">
        <div class="titulo">Detalles del Taller</div>
        <div class="contenido">Nombre: <?php echo $nombre; ?></div>
        <div class="contenido">Día: <?php echo $dia; ?></div>
        <div class="contenido">Hora: <?php echo $hora; ?></div>
        <a href="SeleccTaller.php" class="reg-btn">Regresar</a>
        <a href="#" class="apt-btn" onclick="showModal()">Apuntarse a Taller</a>

<div class="overlay" id="overlay"></div>

<div class="modal" id="modal">
    <h2>Registro Exitoso</h2>
    <a href="loginP.php" class="modal-btn">Cerrar Sesión</a>
</div>

<script>
    function showModal() {
        document.getElementById('modal').classList.add('active');
    }
</script>
    </div>
</body>
</html>