<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Guardar</title>
    </head>

    <body>
        <?php
            //1.DATOS DE CONEXION
            $host = "localhost";
            $user = "root";
            $password = "123456";
            $db = "personas";

            //2.Crear la conexion
            $con = new mysqli($host, $user, $password,$db); //se almacena el objeto en la variable con

            //2.1.PRUEBA DE CONEXION
            if($con->connect_error){ //si la conexion da error
                echo "Base de datos No Disponible - ERROR";
            } else{
                echo "Conectados a la base de datos <br>";
            }

            //3.Enviar datos Datos
            $nombre = $_POST["nombre"]; //$_POST=recuperar los datos de post
            $email = $_POST["email"];
            //echo "La informacion enviada es: Nombre: $nombre Email: $email";

            //4.INSERCION
            $query = "insert into personas (nombre, email) 
            values('$nombre','$email')"; //nombres iguales de la base de datos.

            if($con->query($query)){ //true=se ejecuto correctamente...false=no se ejecuto, error
                echo "persona guardada correctamente";
            }else{
                echo "no se ha podido guardar la persona." . $con->error;
            }
            $con->close(); //cerrar conexion

            //REDIRECCIONAR
            //header('Location: crear.php');
            header('Location: index.php');
        ?>
    </body>
</html>

