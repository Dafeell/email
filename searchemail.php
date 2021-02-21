<html lang="en">   

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="./style.css" />
        <title>Consultar Email</title>
    </head>  

    <body> 

        <article id="principal" class="cont_ppal">
            <form method="POST" action="">
                    
            <fieldset class="cont_inputs">
                <legend>Buscador de Email</legend>
                <input
                    class="input"
                    type="date"
                    name="fechaini"
                    id="fechaini"
                    placeholder="Fecha"
                    required
                />
                <input
                    class="input"
                    type="date"
                    name="fechafin"
                    id="fechafin"
                    placeholder="Fecha"
                    required
                />
                
            </fieldset>
            <div class=cont_sec>
                <input class="button" type="submit" value="Buscar" />
                <button class="button"><a href='index.html'>Volver</a></button>
            <div>
            </form>
        </article>
        <?php
        

            if($_POST){ 
                $desde=$_POST['fechaini'];
                $hasta=$_POST['fechafin'];

                include('connectbd.php');
                $query="SELECT * FROM tb_emails WHERE fecha BETWEEN '".$desde."' AND '".$hasta."'";
                echo '
                    <table border="1">
                        <thead>
                            <tr>
                              <th colspan="3">Email Enviados</th>
                            </tr>
                        </thead>
                        <tr>
                            <td>Fecha</td>
                            <td>Asunto</td>
                            <td>Comentario</td>
                            
                        </tr>';
                        
                    if (mysqli_query($conexion, $query)) {
                        $resultado=mysqli_query($conexion, $query);
                        while($rows=mysqli_fetch_array($resultado)){
                            echo '<tr>
                                    <td>'.$rows[0].'</td>
                                    <td>'.$rows[1].'</td>
                                    <td>'.$rows[2].'</td>
                                </tr>';
                                
                        }  
                    } else {
                        echo "Error: " . $query . "<br>" . mysqli_error($conexion);
                    }
                    echo '</table>  ';
                    include('closedb.php');
            };

        ?>  
    </body>   

</html>  

