<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <title>Envio</title>
</head>
<body style="font-family: 'Ubuntu', sans-serif;">
    <?php


    //reasignar los names de cada imput del form, a una variable definida
    $nombreyapellido=$_POST['nombreyapellido'];
    $telefono=$_POST['numerodetelefono'];
    $email=$_POST['email'];
    $consulta=$_POST['mensaje'];

    //2 definir los datos para el envio
    $destino='lautarop28@gmail.com';
    $asunto="consulta";
    $mensaje="<p>NOMBRE Y APELLIDO: ".$nombreyapellido."</p><p> TELEFONO: ".$telefono."</p><p> EMAIL: ".$email."</p><p> CONSULTA: ".$consulta."</p";
   
    $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
    $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $cabeceras .= 'From: '.$nombreyapellido.'<'.$email.'>' . "\r\n";

 
    //verificar que el mensaje que me mande al mail muestre los datos
    //echo $mensaje;

    //enviar datos por mail = qué quiero que me mande. FUNCIÓN MAIL PHP
    $envio = mail ($destino,$asunto,$mensaje);

    //mensaje de agradecimiento 
   if($envio === true) {
    echo "<h2 style='color: #f19100; font-weight: bold;'>Gracias ".$nombreyapellido." por contacarnos, nos comunicaremos a la brevedad! </h2>";
    }else{
    echo "<p>hubo un error en el envio</p>";
    }

    
    //mysql

    @$conexion=mysqli_connect("localhost","root","","formulario");
    

    @$query1="INSERT INTO formulario VALUES (0,'$nombreyapellido','$telefono','$email','$consulta')";
   
    @$consulta1=mysqli_query($conexion,$query1);

    @mysqli_close($conexion);

     


    
    ?>


</body>
</html>