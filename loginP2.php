<?php
include("conexionBD.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Guardar los datos de la matrícula y el tipo de usuario en variables de sesión
    $contra = $_SESSION['Matricula'] = $_POST['Matricula'];
    $usuario = $_SESSION['Iipo'] = $_POST['Tipo'];
    

    $sql = "SELECT * FROM usuarios WHERE Tipo = ? AND Matricula = ?";
    $stmt = $conn -> prepare($sql);
    $stmt -> bind_param("ss", $usuario, $contra);
    $stmt -> execute();
    $result = $stmt -> get_result();

    if ($result -> num_rows == 1){

        $_SESSION ['Tipo'] = $usuario;

        if ($usuario == "Alumno"){
            
            header ("location: InicioAlumno.php");
            exit();

        }elseif($usuario == "Docente"){

            echo "Inicio de sesion exitoso. Bienvenido, " . $_SESSION ['usuario'];
            header ("location: InicioDocente.php");
            exit();

        }elseif ($usuario == "Coordinador de Taller"){

            echo "Inicio de sesion exitoso. Bienvenido, " . $_SESSION ['usuario'];
            header ("location: InicioCordTaller.php");
            exit();

        }elseif ($usuario == "Admin"){

            echo "Inicio de sesion exitoso. Bienvenido, " . $_SESSION ['usuario'];
            header ("location: InicioAdministrador.php");
            exit();
        }
        

    } else {

        echo "Usuario o contrasenia incorrectos.";
    }

    $stmt -> close();
}