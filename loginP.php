<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="styleLogin.css">
</head>
<body>
<h2 class="encabezao">Bienvenido al sistema de manejo de talleres de la UMB Xalatlaco</h2>
<div class="login-form">
    <div class="contenedor"> <img src="imgs/umb_log.png" width="240" height="123"> </div>
    <form action="loginP2.php" method="POST">
        
        <div class="form-group">
        <label for="Tipo" class="font-size">Tipo de Usuario</label>
            <select class="form-control" id="Tipo" name="Tipo" required>
                <option value="">Seleccione una opción</option> <!-- Opción inicial vacía -->
                <option value="Alumno">Alumno</option>
                <option value="Docente">Docente</option>
                <option value="Coordinador de Taller">Coordinador de Taller</option>
                <option value="Admin">Admin</option>
            </select>
        </div>

        <div class="form-group">
            <label for="Matricula" class="font-size">Contraseña</label>
            <input type="password" class="form-control" placeholder="Matrícula" id="Matricula" name="Matricula" required>
        </div>

        <span class="alert">Datos Incorrectos</span>
        <button type="submit" class="log-btn">Iniciar Sesión</button>
    </form>
</div>

</body>
</html>
