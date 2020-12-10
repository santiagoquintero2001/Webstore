<?php 
    header('Location: index.php');
    include("BaseDatos.php");

    //1. Identificar o recibir el ID(PK) del usuario a eliminar
    $id=$_GET["id"];
        
    //2. Crear un objeto(COPIA) de la clase BaseDatos
    $transaccion=new BaseDatos();

    //3.Construir una consulta SQL para eliminar datos
    $consultaSQL="DELETE FROM productos WHERE idProducto='$id'";
        
    //4. Utilizar un metodo de la clase BD para eliminarDatos
    $transaccion->eliminarDatos($consultaSQL);

?>