<html lang="en">   

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="./style.css" />
        <title>Enviar Formulario</title>
    </head>  

    <body> 
        <?php 
            $fecha = $_POST["fecha"];   
            $asunto = $_POST["asunto"];   
            $texto = $_POST["comentario"];   

            include("connectbd.php"); 
            
            $query = "INSERT INTO $tb_emails (fecha,asunto,texto) VALUES ('$fecha','$asunto','$texto')"; 
            if (mysqli_query($conexion, $query)) {
                echo "<p>Los datos han sido guardados con exito.</p>";
            } else {
                echo "Error: " . $query . "<br>" . mysqli_error($conexion);
            }

            include("closebd.php"); 

            include("sendemail.php"); 
             
            echo " <p><a href='index.php'>Volver al Formulario</a></p> 
                   <p><a href='searchemail.php'>Ir al Buscador</a></p>  
            "; 
        ?>   
    </body>   

</html>  