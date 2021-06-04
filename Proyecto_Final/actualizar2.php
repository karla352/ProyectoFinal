<html>
    <head>
      <title>Actualizacion</title>
    </head>
<body>
<?php
$servidor ="localhost";
$usuario ="root";
$contraseña = "";
$bd = "proyecto_final";
$conexion=mysqli_connect($servidor, $usuario, $contraseña, $bd)
or die ("Error en la conexion");

$N1nombre=$_POST['nombre'];
$N1correo=$_POST['correo'];
$N1edad=$_POST['edad'];
$N1sexo=$_POST['sexo'];
$N1carrera=$_POST['carrera'];
$N1grado=$_POST['grado'];
$N1grupo=$_POST['grupo'];
mysqli_query($conexion, "UPDATE registro set correo='$N1correo',edad='$N1edad',sexo='$N1sexo',carrera='$N1carrera',grado='$N1grado',grupo='$N1grupo' where nombre='$N1nombre'")
        or die ("Error al actualizar los datos");
        mysqli_close($conexion);
        echo "Datos actualizados correctamente";
    

?>

<a href='index.php'>Volver</a>
</body>
</html>