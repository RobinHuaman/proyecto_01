<?php
if ($_SERVER['REQUEST_METHOD']==='POST'){
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $email=$_POST['email'];
    $celular=$_POST['celular'];
    $lista1=$_POST['lista1'];
    $lista2=$_POST['lista2'];
    $lista3=$_POST['lista3'];
    $lista4=$_POST['lista4'];

    //Indicamos el correo del destino 
    $destinataro= 'gbarboza.es@gmail.com';

    //Incidamos el asunto del correo 
    $asunto='Tarea de clase';

    //Diseñamos el cuerpo del mensaje
    $cuerpo= "Nombre: " . $nombre . "\n";
    $cuerpo.= "Apellido: " . $apellido . "\n";
    $cuerpo.= "Email: " . $email . "\n";
    $cuerpo.= "Celular: " . $celular . "\n";
    $cuerpo.= "Carrera: " . $lista1 . "\n";
    $cuerpo.= "Modalidad: " . $lista2 . "\n";
    $cuerpo.= "Ingieneria de Sistema: " . $lista3 . "\n";
    $cuerpo.= "Sede: " . $lista4 . "\n";


    //Enviamos el correo con los datos configurados

    if(mail($destinataro, $asunto, $cuerpo)){
        echo "El mensaje se a enviado satisfactoriamente";
    }else{
        echo "Erros no se pudo enviar tu mensaje";
    }
 }
?>