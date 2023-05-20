<?php
if ($_SERVER['REQUEST_METHOD']==='POST'){
    $nombres=$_POST['nombres'];
    $email=$_POST['email'];
    $cel=$_POST['cel'];
    $lista1=$_POST['lista1'];
    //Indicamos el correo del destino 
    $destinataro= 'gbarboza.es@gmail.com';

    //Incidamos el asunto del correo 
    $asunto='AA2_Matricula';

    //Diseñamos el cuerpo del mensaje
    $cuerpo= "Nombre: " . $nombres . "\n";
    $cuerpo.= "Email: " . $email . "\n";
    $cuerpo.= "Celular: " . $cel . "\n";
    $cuerpo.= "Carrera: " . $lista1 . "\n";

    //Enviamos el correo con los datos configurados

    if(mail($destinataro, $asunto, $cuerpo)){
        echo "El mensaje se a enviado satisfactoriamente";
    }else{
        echo "Erros no se pudo enviar tu mensaje";
    }
 }
?>