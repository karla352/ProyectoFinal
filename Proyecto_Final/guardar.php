<?php
//Conectamos con el servidor
$conectar=mysqli_connect('localhost','root','');
//Verificamos la conexión
if(!$conectar){
    echo"NO SE PUDO CONECTAR CON EL SERVIDOR";
}else{
    $base=mysqli_select_db($conectar,'proyecto_final');
    if(!$base){
        echo"NO SE ENCONTRÓ LA BASE DE DATOS";
    }
}
//recuperar variables
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$edad=$_POST['edad'];
$sexo=$_POST['sexo'];
$carrera=$_POST['carrera'];
$grado=$_POST['grado'];
$grupo=$_POST['grupo'];
//hacemos la sentencia de sql
$sql="INSERT INTO registro VALUES ('$nombre',
                                   '$correo',
                                   '$edad',
                                   '$sexo',
                                   '$carrera',
                                   '$grado',
                                   '$grupo')";
//ejecutamos la sentencia sql
$ejecutar=mysqli_query ($conectar,$sql);
//verificamos la ejecución
if(!$ejecutar){
    echo"HUBO ALGUN ERROR";
}else{
    echo"LOS DATOS SE HAN GUARDADO CORRECTAMENTE ";
}
?>
<a href='index.php'>Volver</a>