<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<?php
    include ("configRutas.php")
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Resultados Formulario</title>
         <link rel="stylesheet" type="text/css" href="<?php echo $rutaStyleSheets;?>/style.css"/>
        <script type="text/javascript" src="<?php echo $rutaJS; ?>/functions.js"></script>
    </head>
    <body>
        <h2>Resultados</h2>
        <?php
            echo "Nombre: $nombre<br>";
            echo "Edad: $edad<br>";
            echo "Correo: $correo<br>";
        ?>
        <a href="index">Regresar</a>
    </body>
</html>
