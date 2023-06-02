<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola mundo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class='d-flex flex-column align-items-center'>
    <h1>Hola mundo!</h1>

    <?php
    // Fixme: Esto es un comentario

    // Loop que imprima 10 veces hola mundo
    // for ($i = 0; $i < 10; $i++) {
    //     echo "<p>Hola mundo!</p>";
    // }

    echo "Probando PHP";

    // Visualizar el valor de display_errors
    echo "<p>El valor de display_errors es: </p>";
    echo ini_get('display_errors') ? 'ON' : 'OFF';
    echo "<p>";

    // Mirar el puerto SMTP para el envio de mails
    echo "<p>El valor de SMTP es: </p>";
    echo ini_get('smtp_port');
    echo "<p>";

    // Cambiar el puerto SMTP(hasta el final del script)
    ini_set('smtp_port', 2525);

    // Mirar el puerto SMTP para el envio de mails
    echo "<p>El valor de SMTP es: </p>";
    echo ini_get('smtp_port');
    echo "<p>";

    // phpinfo()
    ?>
</body>

</html>