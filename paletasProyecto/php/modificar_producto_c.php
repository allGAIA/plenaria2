<?php

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["sabor"]) and !empty($_POST["Costo"]) and !empty($_POST["Precio"]) and !empty($_POST["Precio_m"])) {
        
        $id=$_POST["id"]; 
        $sabor=$_POST["sabor"];
        $Costo=$_POST["Costo"];
        $Precio=$_POST["Precio"];
        $Precio_m=$_POST["Precio_m"];

        $sql=$conn->query(" update paletas set sabor='$sabor', Costo=$Costo, Precio=$Precio, Precio_m=$Precio_m  WHERE ID_Paleta=$id");
       
       
        //if ($sql==1) {
            header("location: /productos.php");3
     //   } /*else {
          //  echo "<div class='alert alert-danger'>Error al modificar producto</div>";
      //  }*/
        
    }else{
        echo "<div class='alert alert-warning'>Campos vacios</div>";
    }
}

?>