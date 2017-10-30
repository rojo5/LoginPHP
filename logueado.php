<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php
            $passwd ="1234";
            $user ="pancho";
            
            if (($_POST["password"] === $passwd) &&  ($_POST["nombre"] === $user)){
                echo  "<h1><b>BIENVENIDO ".$_POST["nombre"]."</b></h1>";
                echo '<img src="imagenes/giphy.gif" alt=""/>';
            }
            else {
                echo '<img src="imagenes/fallo.gif" alt=""/>';
            }
        ?>
    </body>
</html>
