<?php
if ($_SERVER['REQUEST_METHOD']==='POST'){
    $nombre=$_POST['nombre'];
    $email=$_POST['email'];
    $celular=$_POST['celular'];
    $mensaje=$_POST['mensaje'];

    //Indicamos el correo del destino 
    $destinataro= '72310768@certus.edu.pe';

    //Incidamos el asunto del correo 
    $asunto='MENSAJE PRUEBA';

    //Diseñamos el cuerpo del mensaje
    $cuerpo= "Nombre " . $nombre . "\n";
    $cuerpo.= "Email " . $email . "\n";
    $cuerpo.= "Celular " . $celular . "\n";
    $cuerpo.= "Mensaje " . $mensaje . "\n";

    //Enviamos el correo con los datos configurados

    if(mail($destinataro, $asunto, $cuerpo)){
        echo "El mensaje se a enviado satisfactoriamente";
    }else{
        echo "Erros no se pudo enviar tu mensaje";
    }
 }
?>