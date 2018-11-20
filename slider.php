<?php
require('config.php');
//
$error = false;
//
// Validar entradas
//


if ($_FILES["imagen"]["size"] > 6024000) {
    $error = true;
    echo "Error: imagen demasiado pesada";

}
    
//
if (!$error) { // Si no hubo error, proceder
    $dir = "img/";
    $nombre_archivo = $_FILES['imagen']['name'];

    

    // Crear objeto de conexión con la base de datos
    $mysqli = new mysqli(_DB_SERVER_, _DB_USER_, _DB_PASSWD_, _DB_NAME_);

    /* Verificar errores de conexion con la BD */
    if ($mysqli->connect_error) {
        echo "Connection failed: " . $conn->connect_error;
    }

    if (!move_uploaded_file($_FILES['imagen']['tmp_name'], $dir . $nombre_archivo)) {
        echo "error a la subida de archivo";
    }

    // crear cadena de inserción SQL
    $sql = "INSERT INTO slider (imagen)
            VALUES ('$dir$nombre_archivo')";

    // Ejecutar y validar el comando SQL 
    if ($mysqli->query($sql) === true) {


        echo "<script type='text/javascript'>alert('Tarea Guardada'); window.location='agregar.php'</script>";

    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
        echo $msg = "Error: " . $sql . "<br>" . $mysqli->error;
    }

    $mysqli->close();  // Cerrar conexión
    $error = false;
}

   # echo "<BR><BR>";
    #echo "<center><a href='agregar.php'>Registrar Más Datos</a></center>";
    #echo "<center><a href='noticias.php'>Mostrar Datos</a></center>";

?>