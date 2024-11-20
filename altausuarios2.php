<?php 
include("conexionBD.php");
//Revisar si los datos fueron enviados mediante el metodo atraves del metodo 
if($_SERVER["REQUEST_METHOD"]=="POST"){
    //Recuperrar los datos enviados desde el formulario
    $matricula=$_POST['matricula'];
    $nombre=$_POST['nombre'];
    $apaterno=$_POST['apaterno'];
    $amaterno=$_POST['amaterno'];
    $tipo=$_POST['tipo'];
    $status=$_POST['status'];
    

    //Consusltar SQL para insertar datos
    $sql = "INSERT INTO usuarios(Matricula, Nombre, Apaterno, Amaterno, Tipo, Status)
            VALUES('$matricula','$nombre','$apaterno','$amaterno','$tipo','$status')";
        
    //Ejecutar la consulta realizada
    if($conn->query($sql)==TRUE){
        echo "<h1>Registro exitoso</h1>";
        echo "<br>";

        echo "<a href='loginP.php'?>Iniciar Sesion</a>";
    }
    else{
      echo "Error:".$sql."<br>".$conn -> error;
    }
    
}


//$sql = "SELECT * FROM usuarios WHERE Tipo = 'Alumno'";
//$result = mysqli_query($conn, $sql);

//if (mysqli_num_rows($result) > 0) {


  //echo "<table border = '1'>

    //<tr>

      //<td>Matricula</td>
      //<td>Nombre</td>
      //<td>Apellido Paterno</td>
      //<td>Apellido Materno</td>
      //<td>Tipo</td>
      //<td>Status</td>
      //<td>carrera</td>
      //<td>semestre</td>
    //</tr>";

  //while($row=mysqli_fetch_assoc($result)){


    //echo "<tr>
            //<td>".$row['Matricula']."</td>
            //<td>".$row['Nombre']."</td>
            //<td>".$row['Apaterno']."</td>
            //<td>".$row['Amaterno']."</td>
            //<td>".$row['Tipo']."</td>
            //<td>".$row['Status']."</td>
            //<td>".$row['Id_carrera']."</td>
            //<td>".$row['Id_Semestre']."</td>

            //<td> 
              
              //<img src = '". $mostrarimg ."' alt = 'Foto de ". $row ['Nombre'] . "' width = '30' height = '30' >
            //</td>
            //<td>
              //<a href='modificaralumno.php? matricula=" . $row['Matricula'] . "'>
                //<img src='Icons/samu.png' alt='Editar' wdth='30' height='30'>
              //</a>
            //</td>
            //<td>
              //<a href='eliminaralumno.php? matricula=" . $row['Matricula'] . "'>
                //<img src='Icons/samu.png' alt='Eliminar' wdth='30' height='30'> 
              //</a>
            //</td>
          //</tr>";  
    //}
    //echo "</table>";
//}else{
  //echo "No hay reguistros disponibles.";
//}
mysqli_close($conn);
?>