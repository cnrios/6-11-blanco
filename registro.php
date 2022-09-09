<?php   

    $mysql = new mysqli("localhost","root","","androidusers");
    
    if($mysql->connect_error)
    {

        die("fallo la conexion");
    
    }
    else
    {
        echo "conexion satisfactoria";
    }
