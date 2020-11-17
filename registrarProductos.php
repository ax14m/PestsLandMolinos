<?php

include('BaseDatos.php');

if (isset($_POST["botonEnvio"]))
{
//recibir los datos del formulario
    $nombre=$_POST['nombre'];
    $cantidad=$_POST['cantidad'];
    $descripcion=$_POST['descripcion'];
    $tipo=$_POST['tipo'];
    $foto=$_POST['foto'];


   //copia u objeto de la clase BD

   $transaccion= new BaseDatos() ;

 //crear consulta
 $consultSQL="INSERT INTO productos( nombre, cantidad, descripcion, tipo, foto) VALUES ('$nombre','$cantidad','$descripcion','$tipo','$foto')";

//llamar al metodo de la clase BD agregardatos

$transaccion->agregarDatos($consultSQL);

}



?>