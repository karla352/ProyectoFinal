<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Registro de Datos</title>
        <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
    <body>
        <div class="form">
            <form action="guardar.php" method="POST">
                <p>NOMBRE</p>
                <label for="nombre">Su nombre</label>
                <br>
                <input type="nombre" name="nombre" placeholder="Nombre"required>
                <br>
                <p>CORREO</p>
                <label for="correo">email</label>
                <br>
                <input type="correo" name="correo" placeholder="nombre@algo.com"required>
                <br>
                <p>EDAD</p>
                <label for="nombre">Ingrese su edad:</label>
                <br>
                <input type="edad" name="edad" placeholder=""required>
                <br>
                <p>SEXO</p>
                <div class="sexo">
                    <input type="radio" name="sexo" id="hombre" value="Hombre">
                    <label class="label-radio hombre" for="hombre">Hombre</label>

                    <input type="radio" name="sexo" id="Mujer" value="Mujer">
                    <label class="label-radio mujer" for="Mujer">Mujer</label>
                </div>
                <p>CARRERA</p>
                <label for="nombre">Ingrese su carrera:</label>
                <br>
                <input type="carrera" name="carrera" placeholder=""required>
                <br>
                <p>GRADO</p>
                <label for="nombre">Ingrese su grado:</label>
                <br>
                <input type="grado" name="grado" placeholder=" "required>
                <br>
                <p>GRUPO</p>
                <label for="nombre">Ingrese su grupo:</label>
                <br>
                <input type="grupo" name="grupo" placeholder=" "required>
                <br>
                <br>
                <input type="submit" value="Enviar">
        </body>
</html>
            </form>
        </div>
        <h1>Tabla de los datos registrados</h1>
            <?php
            $conexion=mysqli_connect('localhost','root','');
            $base=mysqli_select_db($conexion,'proyecto_final');
            ?>
                <table border=10 bordercolor="black">
                    <tr>
                        <td>Nombre</td>
                        <td>Correo</td>
                        <td>Edad</td>
                        <td>Sexo</td>
                        <td>Carrera</td>
                        <td>Grado</td>
                        <td>Grupo</td>
                    </tr>  
               
                   <?php 
                     $sql='SELECT * FROM registro';
                     $ejecuta_sentencia=mysqli_query($conexion,$sql);
                     while($mostrar=mysqli_fetch_array($ejecuta_sentencia)){
                    ?> 
                    <tr>
                    <td><?php echo $mostrar['nombre']; ?></td>
                    <td><?php echo $mostrar['correo']; ?></td>
                    <td><?php echo $mostrar['edad']; ?></td>
                    <td><?php echo $mostrar['sexo']; ?></td>
                    <td><?php echo $mostrar['carrera']; ?></td>
                    <td><?php echo $mostrar['grado']; ?></td>
                    <td><?php echo $mostrar['grupo']; ?></td>
                    </tr>
                    <?php  } ?>
                </table>
    <form action="actualizar.php" method="post">
        <input type="submit" value="Actualizar Registro" name="btnActualizar">
    </form>
    <br><br>

    <form action="borrardatos.php" method="POST">
    <font face="Consolas" size="5">Ingresa el nombre de la persona que deseas borrar</font><br>
    Nombre: <input type="text" name="nombre">
    <input type="submit" value="Borrar Registro" name="btnActualizar">
    </form>
    </body>
</html>

