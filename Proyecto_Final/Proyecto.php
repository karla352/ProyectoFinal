<?php
    $enlace = mysqli_connect('localhost','root','');

    if(!$enlace){
        echo"Error en la conexión con el servidor";
    }else{
        $base=mysqli_select_db($enlace,'formularios');
        if(!$base){
            echo"No existe una base de datos";
        }
    }
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Registro de Datos</title>
        <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
    <body>
        <div class="for">
            <form action="#" class="formularios" id="formularios" name="formularios" method="POST">
                <div class="contenedor-inputs">
                    <<input type="text" name="nombre" placeholder="Nombre completo">
                    <<input type="text" name="correo" placeholder="Correo">

                <div class="sexo">
                    <input type="radio" name="sexo" id="hombre" value="hombre">
                    <label class="label-radio hombre" for="hombre">Hombre</label>

                    <input type="radio" name="sexo" id="mujer" value="mujer">
                    <label class="label-radio mujer" for="mujer">Mujer</label>
                </div>

                    <input type="text" name="edad" placeholder="Edad">
                    <input type="text" name="carrera" placeholder="Carrera">
                    <input type="text" name="grado" placeholder="Grado">
                    <input type="text" name="grupo" placeholder="Grupo">

                    <ul class="error" id="error"></ul>
                </div>
                <input type="sumbit" class="btn" name="registrarse" value="Registrarse">
            </form>
            <div class="tabla">
                <table>
                    <tr>
                        <th>Nombre completo</th>
                        <th>Correo</th>
                        <th>sexo</th>
                        <th>Edad</th>
                        <th>Carrera</th>
                        <th>Grado</th>
                        <th>Grupo</th>
                    </tr>
                        <?php
                             $consulta = "SELECT * FROM datos";
                             $ejecutarConsulta = mysqli_query ($enlace, $consulta);
                             $verFilas = mysqli_num_rows($ejecutarConsulta);
                             $fila = mysqli_fetch_array($ejecutarConsulta);

                             if(!$ejecutarConsulta){
                                 echo"Error en la consulta";
                             }else{
                                 if($verFilas<1){
                                     echo"<tr><td>Sin registros</td></tr>";
                                 }else{
                                     for($i=0; $i<=$fila; $i++){
                                         echo'
                                            <tr>
                                                <td>'.$fila[6].'</td>
                                                <td>'.$fila[0].'</td>
                                                <td>'.$fila[1].'</td>
                                                <td>'.$fila[2].'</td>
                                                <td>'.$fila[3].'</td>
                                                <td>'.$fila[4].'</td>
                                                <td>'.$fila[5].'</td>
                                            </tr>
                                            ';
                                     }
                                 }
                             }
                        ?>

                </table>
            </div>
        </div>
        <script src="formularios.js"></script>
    </body>
</html>


<?php
    $servidor="localhost";
    $usuario="root";
    $clave="";
    $baseDeDatos="formularios";

    $enlace = mysqli_connect($servidor, $usuario, $calve, $baseDeDatos);

    if(!$enlace){
        echo"Error en la conexion con el servidor";
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Registro de Datos</title>
        <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
    <body>
        <div class="contenedor">
            <form action="#" class="formularios" id="formularios" name="formularios" method="POST">
                <div class="contenedor-inputs">
                    <input type="text" name="nombre" placeholder="Nombre completo">
                    <input type="text" name="correo" placeholder="Correo">
                    <input type="text" name="edad" placeholder="Edad">
                    <input type="text" name="carrera" placeholder="Carrera">
                    <input type="text" name="grado" placeholder="Grado">
                    <input type="text" name="grupo" placeholder="Grupo">

                    <div class="sexo">
                        <input type="radio" name="sexo" id="hombre" value="hombre">
                        <label class="label-radio hombre" for="hombre">Hombre</label>

                        <input type="radio" name="sexo" id="mujer" value="mujer">
                        <label class="label-radio mujer" for="mujer">Mujer</label>
                    </div>

                    <ul class="error" id="error"></ul>
                </div>
                <input type="sumbit" class="btn" name="registrarse" value="Registrarse">
            </form>
            <div class="tabla">
                <table>
                    <tr>
                        <th>Nombre completo</th>
                        <th>Correo</th>
                        <th>Edad</th>
                        <th>Carrera</th>
                        <th>Grado</th>
                        <th>Grupo</th>
                    </tr>


                </table>
            </div>
        </div>
        <script src="formularios.js"></script>
    </body>
</html>




<?php
    if(isset($_POST['registrarse'])){
        $nombre=$_POST["nombre completo"];
        $correo=$_POST["correo"];
        $edad=$_POST["edad"];
        $carrera=$_POST["carrera"];
        $grado=$_POST["grado"];
        $grupo=$_POST["grupo"];

        $insertarDatos = "Insert INTO datos VALUES('$nombre',
                                                    '$correo',
                                                    '$edad',
                                                    '$carrera',
                                                    '$grado',
                                                    '$grupo')"; 
        $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);

        if(!$ejecutarInsertar){
            echo"Error en la linea de sql";
        }
    }
?>

<?php
    if(isset($_POST['registrarse'])){
        $nombre=$_POST["nombre completo"];
        $correo=$_POST["correo"];
        $edad=$_POST["edad"];
        $carrera=$_POST["carrera"];
        $grado=$_POST["grado"];
        $grupo=$_POST["grupo"];

        $insertarDatos = "Insert INTO datos VALUES('$nombre',
                                                    '$correo',
                                                    '$edad',
                                                    '$carrera',
                                                    '$grado',
                                                    '$grupo')"; 
        $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);

        if(!$ejecutarInsertar){
            echo"Error en la linea de sql";
        }
    }
?>                    <th>Nombre completo</th>
                        <th>Correo</th>
                        <th>Edad</th>
                        <th>Carrera</th>
                        <th>Grado</th>
                        <th>Grupo</th>
                    </tr>


                </table>
            </div>
        </div>
        <script src="formularios.js"></script>
    </body>
</html>
<?php
    if(isset($_POST['registrarse'])){
        $nombre=$_POST["nombre completo"];
        $correo=$_POST["correo"];
        $edad=$_POST["edad"];
        $carrera=$_POST["carrera"];
        $grado=$_POST["grado"];
        $grupo=$_POST["grupo"];

        $insertarDatos = "Insert INTO datos VALUES('$nombre',
                                                    '$correo',
                                                    '$edad',
                                                    '$carrera',
                                                    '$grado',
                                                    '$grupo')"; 
        $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);

        if(!$ejecutarInsertar){
            echo"Error en la linea de sql";
        }
    }
?>