<?php

    //Datos de conexión
    $hostDB='localhost';
    $nameDB='heladitos';
    $userDB='root';
    $passwordDB='Lernjergui-97';

    //Configuración de conexión
    $conn = mysqli_connect($hostDB,$userDB,$passwordDB,$nameDB);

    if(!$conn) {
        echo "Connection Failed!";
        exit();
    }

?>