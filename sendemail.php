<?php
    $destinatario = "danielafelicianoelias@gmail.com";
    $asunto = $_POST['asunto'];
    $mensaje = "Fecha: ".$_POST['fecha']."<br>
                Comentario: ".$_POST['comentario']."<br><br>
                
                Saludos!";
    $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
    $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $cabeceras .= 'To: Daniela <danielafelicianoelias@gmail.com>' . "\r\n";
    $cabeceras .= 'From: SuDespacho.net <info@sudespacho.net>' . "\r\n";
                
    if(@mail($destinatario, $asunto, $mensaje, $cabeceras)){
        echo "El email se envió correctamente a ".$destinatario.".";
    }else{
        echo "El email no se pudo enviar.";
    }
?>