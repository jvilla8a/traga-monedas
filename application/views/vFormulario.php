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
        <?php echo $bootstrap; ?>
    </head>
    <body>

        <div class="container">
            <div class="text-center">
                <h1>Iniciar Sesión</h1>
                <hr>
                <div class="col-sm-8 col-sm-offset-2">
                    <?php 
                        $userArray = array(     'name'          =>  'txtId',
                                                'id'            =>  'txtId',
                                                'type'          =>  'text',
                                                'required'      =>  'required',
                                                'placeholder'   =>  'Usuario');
                        $passArray = array(     'name'          =>  'txtPass',
                                                'id'            =>  'txtPass',
                                                'type'          =>  'password',
                                                'required'      =>  'required',
                                                'placeholder'   =>  'Contraseña');
                        $enviarArray = array(   'name'          =>  'btnSubmit',
                                                'id'            =>  'btnSubmit',
                                                'value'         =>  'Iniciar Sesión');
                        
                        echo form_open('formulario/agenda');
                        echo form_input($userArray);
                        echo '<p></p>';
                        echo form_input($passArray);
                        echo '<p></p>';
                        echo form_submit($enviarArray);
                        echo form_close();
                        echo '<div id="error">';
                        echo validation_errors();
                        echo '</div>'
                    ?>
                </div>
            </div>
        </div>


    	<!-- <h2>Datos Personales</h2>
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
        <? echo form_close(); ?> -->
    </body>
</html>
