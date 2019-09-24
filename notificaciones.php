<?php
$nombre_archivo = "notificaciones.txt";

if(file_exists($nombre_archivo))
{
    $mensaje = "El Archivo $nombre_archivo se ha modificado";
}

else
{
    $mensaje = "El Archivo $nombre_archivo se ha creado";
}

if($archivo = fopen($nombre_archivo, "a"))
{
    if(fwrite($archivo, json_encode($_POST)))
    {
        echo "Se ha ejecutado correctamente";
    }
    else
    {
        echo "Ha habido un problema al crear el archivo";
    }

    fclose($archivo);
}

$file = fopen("notificaciones.txt", "r") or exit("Unable to open file!");
//Output a line of the file until the end is reached
while(!feof($file))
{
    echo fgets($file);
}
fclose($file);
?>