<html>
<head>
<title>PHP contacto </title>

</head>

<body>

<?php
    $destino= "abyallison@hotmail.com"
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $pedido = $_POST["pedido"];
    $contenido = "Nombre: " . $nombre . "\nCorreo:" . $correo. "\nTelefono" . $telefono . "\nPedido: " . $pedido;
    
    mail($destino,"Contacto",$contenido);

    header("Location:Contacto.html");


?>

</body>

</html>