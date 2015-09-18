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
        <title></title>
        <link rel="stylesheet" type="text/css" href="<?php echo $rutaStyleSheets;?>/style.css"/>
        <script type="text/javascript" src="<?php echo $rutaJS; ?>/functions.js"></script>
    </head>
    <body>
    	<h2>Datos Personales</h2>
        <img width="150" height="150" src="<?php echo $rutaImages?>/img1.jpg"/>
    	<div id="error">
	        <?php
	        	echo validation_errors();
	        ?>
        </div>
        <br>
        <? echo form_open('formulario/index'); ?>
        Nombre
        <input type="text" name="txtNombre" id="txtNombre" value="<? echo set_value('txtNombre'); ?>/>"<br>
        Edad
        <input type="text" name="txtEdad" id="txtEdad"/><br>
        Correo
        <input type="email" name="txtCorreo" id="txtCorreo"/><br>
        <input type="submit" value="Ver Datos"/>
        <input type="button" value="Prueba JavaScript" onclick="saludo()" />
        <input type="reset" value="Restablecer"/>
        <? echo form_close(); ?>
    </body>
</html>
