<?php
function form_mail($sPara, $sAsunto, $sTexto)
{
  $sCabeceraTexto = "";
  $sAdjuntos = "";

  $sCabeceras = "";
  $sCabeceras .= "MIME-version: 1.0\n";

  $sCabeceras .= "Content-type: multipart/mixed;";
  $sCabeceras .= "boundary=\"--_Separador-de-mensajes_--\"\n";

  $sCabeceraTexto = "----_Separador-de-mensajes_--\n";
  $sCabeceraTexto .= "Content-type: text/plain;charset=iso-8859-1\n";
  $sCabeceraTexto .= "Content-transfer-encoding: 7BIT\n";

  $sTexto = $sCabeceraTexto.$sTexto;

  if ($_FILES['archivo']['size'] > 0) {
    $sAdjuntos .= "\n\n----_Separador-de-mensajes_--\n";
    $sAdjuntos .= "Content-type: ".$_FILES['archivo']['type'].";name=\"".$_FILES['archivo']['name']."\"\n";;
    $sAdjuntos .= "Content-Transfer-Encoding: BASE64\n";
    $sAdjuntos .= "Content-disposition: attachment;filename=\"".$_FILES['archivo']['name']."\"\n\n";

    $oFichero = fopen($_FILES['archivo']['tmp_name'], 'r');
    $sContenido = fread($oFichero, filesize($_FILES['archivo']['tmp_name']));
    $sAdjuntos .= chunk_split(base64_encode($sContenido));
    fclose($oFichero);
    $sTexto .= $sAdjuntos."\n\n----_Separador-de-mensajes_----\n";
    return(mail($sPara, $sAsunto, $sTexto, $sCabeceras));
  }

}

$asunto = "Inscripciones Festival de Chinú";

//cambiar aqui el email
if (form_mail("inscripciones@festivaldechinu.com", $asunto,"Los datos introducidos en el formulario son:\n\n")){
  echo "Su formulario ha sido enviado con exito";
} else {
  echo "Su formulario no ha sido enviado";
}

header("Location: ./inscripcion.html");
?>
