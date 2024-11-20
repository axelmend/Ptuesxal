<?php 
$server = "localhost";
$database = "t_uesxal";
$username = "root";
$psw = "";

//Crear la conexion a la base de datos local
$conn = mysqli_connect($server, $username, $psw, $database);

//Revisar que la conexion fue exitosa
if(!$conn){
    die("Conexion fallida: " . mysqli_connect_error());
}
//echo "Conexion correcta";

//Cerrar la conexion
//mysqli_close($conn);
?>