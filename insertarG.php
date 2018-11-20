<?php
require('config.php');
//
$error = false;
//
// Validar entradas
//
if (!isset($_POST["titulo"])) {
    $error = true;
    echo "Error: Campo de titulo vacio";
}
if (!isset($_POST["descripcion"])) {
    $error = true;
    echo "Error: Campo de reseña vacio";
}



if ($_FILES["imagen"]["size"] > 6024000) {
    $error = true;
    echo "Error: imagen demasiado pesada";

}

    
//
if (!$error) { // Si no hubo error, proceder

    $titulo = $_POST["titulo"];
    $descripcion = $_POST["descripcion"];
    
    $dir = "img/";
    $nombre_archivo = $_FILES['imagen']['name'];
    $nombre_archivoA = $_FILES['imagenA']['name'];
    $nombre_archivoB = $_FILES['imagenB']['name'];
    $nombre_archivoC = $_FILES['imagenC']['name'];
    $nombre_archivoD = $_FILES['imagenD']['name'];
    $nombre_archivoE = $_FILES['imagenE']['name'];
    

    

    // Crear objeto de conexión con la base de datos
    $mysqli = new mysqli(_DB_SERVER_, _DB_USER_, _DB_PASSWD_, _DB_NAME_);

    /* Verificar errores de conexion con la BD */
    if ($mysqli->connect_error) {
        echo "Connection failed: " . $conn->connect_error;
    }

    if (!move_uploaded_file($_FILES['imagen']['tmp_name'], $dir . $nombre_archivo)) {
        echo "error a la subida de archivo";
    }
    if (!move_uploaded_file($_FILES['imagenA']['tmp_name'], $dir . $nombre_archivoA)) {
        echo "error a la subida de archivo";
    }
    if (!move_uploaded_file($_FILES['imagenB']['tmp_name'], $dir . $nombre_archivoB)) {
        echo "error a la subida de archivo";
    }
    if (!move_uploaded_file($_FILES['imagenC']['tmp_name'], $dir . $nombre_archivoC)) {
        echo "error a la subida de archivo";
    }
    if (!move_uploaded_file($_FILES['imagenD']['tmp_name'], $dir . $nombre_archivoD)) {
        echo "error a la subida de archivo";
    }
    if (!move_uploaded_file($_FILES['imagenE']['tmp_name'], $dir . $nombre_archivoE)) {
        echo "error a la subida de archivo";
    }
   

    // crear cadena de inserción SQL
    $sql = "INSERT INTO galeria (titulo, descripcion, imagen, imagenA, imagenB, imagenC, imagenD, imagenE)
            VALUES ('$titulo', '$descripcion', '$dir$nombre_archivo', '$dir$nombre_archivoA', '$dir$nombre_archivoB', '$dir$nombre_archivoC', '$dir$nombre_archivoD', '$dir$nombre_archivoE')";

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