<?php 
    header('Location: index.php');
    include("BaseDatos.php");

    if(isset($_POST["botonEnvio"])){
        
        //1. Recibo datos del formulario
        $nombre=$_POST["nombre"];
        $descripcion=$_POST["descripcion"];
        $cantidad=$_POST["cantidad"];
        $precio=$_POST["precio"];
        $foto=$_POST["foto"];
        


        //2. Crear un objeto(COPIA) de la clase BaseDatos
        $transaccion=new BaseDatos();

        //3.Construir una consulta SQL para insertar datos
        $consultaSQL="INSERT INTO productos(nombre,descripcion,cantidad,precio,foto) VALUES ('$nombre','$descripcion','$cantidad','$precio','$foto')";

        
        //4. Utilizar el metodo agregarDatos() de la clase BaseDatos
        $transaccion->agregarDatos($consultaSQL);

    }

    if(isset($_POST["botonEditar"])){

        //0.Recibir el id del registro a editar
        $id=$_GET["id"];

        //1.Recibir los datos
        $nombre=$_POST["nombreEditar"];
        $descripcion=$_POST["descripcionEditar"];
        $cantidad=$_POST["cantidadEditar"];
        $precio=$_POST["precioEditar"];

        //2. Crear una copia de la clase BaseDatos
        $transaccion= new BaseDatos();

        //3. Crear una consulta SQL para actualizar registros
        $consultaSQL="UPDATE productos SET nombre='$nombre',descripcion='$descripcion', cantidad='$cantidad', precio='$precio' WHERE idProducto='$id'";

        //4. Ejecutar el metodo editarDatos de la clase BaseDatos
        $transaccion->editarDatos($consultaSQL);
    }

?>