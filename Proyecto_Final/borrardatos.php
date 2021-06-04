<html>
    <head>
      <title>Borrar datos</title>
    </head>
<body>
<?php
$servidor ="localhost";
$usuario ="root";
$contraseña = "";
$bd = "proyecto_final";

$conexion=mysqli_connect($servidor, $usuario, $contraseña, $bd)
or die ("Error en la conexion");

$clave=$_POST['nombre'];

mysqli_query($conexion, "DELETE FROM registro where nombre='$clave'")
or die ("Error al borrar los datos");

mysqli_close($conexion);
    echo "Datos eliminados correctamente";

?>
<a href='index.php'>Volver</a>
</body>
</html>