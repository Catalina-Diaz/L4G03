<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TABLA</title>
    </head>

    <body> 
        <center>
            <h2>Registro - Base de Datos</h2> 
        
            <table border="1px" > 
                <tr>
                    <td><b>ID</b></td>
                    <td><b>NOMBRE</b></td>
                    <td><b>EMAIL</b></td>
                </tr> 

                <?php
                    //L4G03-CRUD--Hola desde index---MOSTRAR EN UNA TABLA EL LISTADO DE LA BASE DE DATOS Y CREAR UN BOTON LLAMADO "NUEVO" QUE REDIRECIONE A CREAR.PHP

                    $host = "localhost";
                    $user = "root";
                    $password = "123456";
                    $db = "personas";

                    $con = new mysqli($host, $user, $password,$db);

                    $sql = "SELECT * FROM personas";
                    $r= $con->query($sql);

                    while($mostrar=mysqli_fetch_array($r)){          
                ?>
                    <tr>
                        <td><?php echo $mostrar['id'] ?></td>
                        <td><?php echo $mostrar['nombre'] ?></td>
                        <td><?php echo $mostrar['email'] ?></td>
                    </tr>
                    
                    <?php
                    }
                    ?>
            
            </table> 
            <br><a href="crear.php">Nuevo</a> 
            <input type="submit" value="NUEVO" onclick = "location='crear.php'"/> <!--BOTON-->
        </center>
    </body>
</html>