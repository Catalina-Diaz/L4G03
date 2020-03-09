
<html>
    <head>
        <title>LOGIN</title>        
    </head>

    <?php
        //formulario basico
    ?>

    <body>
        <center>
            <form action= "guardar_persona.php" method="post"> <!--donde se guarda y por cual metodo-->
   
                <div class="form-group">
                    <h2><font >Crear Persona</font></h2>
                </div>

                <div class="form-group">
                    <b>NOMBRE:</b> 
                    <br><INPUT type=text name=nombre> </br>
                </div>

                <div class="form-group">
                    <b>EMAIL:</b> 
                    <br><INPUT type=text name=email> </br>
                </div>

                <div class="form-group">
                    <br><button type="submit">GUARDAR</button></br>
                    <br><a href="index.php">Volver a Index</a>
                </div>
     
            </form> 
        </center>
    </body>
        
</html>