<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejemplo Login</title>
        <link href="css/estilos.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="caja">
            <form method="post"action="logueado.php">
                <label>Usuario:</label>
                <input type="text" name="nombre" placeholder="Usuario..." required>
                <label>Contraseña:</label>
                <input type="password" name="password" placeholder="Contraseña..." required>
                <button type="submit">Login</button>
            </form>
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
