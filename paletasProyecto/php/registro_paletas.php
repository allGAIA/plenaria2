<?php

include "conexion.php";

if (!empty($_POST["btnregistrar"])){
    if (!empty($_POST["sabor"])and !empty($_POST["Costo"])and !empty($_POST["Precio"])and !empty($_POST["Precio_m"])) {
        
        $sabor=$_POST["sabor"];
        $Costo=$_POST["Costo"];
        $Precio=$_POST["Precio"];
        $Precio_m=$_POST["Precio_m"];

        $sql=$conn->query("insert into paletas(sabor,Costo,Precio,Precio_m)values('$sabor', '$Costo', '$Precio', '$Precio_m')");
        
    }
} 

?>