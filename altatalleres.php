<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <form action="altatalleres2.php" method="POST">
            <table>
                <tr><td>Id Taller</td><td><input type="text" name="matricula" value=""></td></tr>
                <tr><td>Nombre</td><td><input type="text" name="nombre" value=""></td></tr>
                <tr><td>Dia</td><td><input type="date" name="dia" value=""></td></tr>
                <tr><td>Hora</td><td><input type="time" name="hora" value=""></td></tr>
                <tr><td>Status </td><td><input type="text"  name="status" value=""></td></tr>
                <tr><td>Cupo</td><td><input type="text" name="cupo" value=""></td></tr>
                <tr><td>Categoria</td><td><input type="text" name="categoria" value=""></td></tr>
                <tr><td><input type="submit" name="Registrar"></td></tr>
            </table>
        </form>
    </body>
</html>