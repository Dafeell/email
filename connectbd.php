<?php
    $databasehost = "localhost:3306";  
    $databasename = "prueba_tecnica";   
    $databaseuser = "demo";
    $databasepassword = "password";

    $tb_emails = "tb_emails";    
    $conexion = mysqli_connect("$databasehost","$databaseuser","$databasepassword","$databasename")
    or die ("Error: ". mysqli_error($conexion));
?>
