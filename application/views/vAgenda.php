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
        <h2>Agenda</h2>
        <?php
            
            $nombreArray = array(           'name'          =>  'txtNombre',
                                            'id'            =>  'txtNombre',
                                            'placeholder'   =>  'Nombre');
            $descripcionArray = array(      'name'          =>  'txaDescripcion',
                                            'id'            =>  'txaDescripcion',
                                            'rows'          =>  '10',
                                            'cols'          =>  '30',
                                            'placeholder'   =>  'Descripcion');
            $enviarArray = array(           'name'          =>  'subEnviar',
                                            'id'            =>  'subEnviar',
                                            'value'         =>  'Enviar Datos');
            $restablecerArray= array(       'name'          =>  'rstRestablecer',
                                            'id'            =>  'rstRstablecer',
                                            'value'         =>  'Restablecer');
            
            echo form_open('formulario/agenda');
            echo 'Nombre: ';
            echo form_input($nombreArray);
            echo '<p></p>';
            echo 'Fecha: ';
            echo '<input type="date" name="dteFecha" id="dteFecha" placeholder="Seleccione la Fecha" required';
            echo '<p></p>';
            echo '<p>Descripcion:</p>';
            echo form_textarea($descripcionArray);
            echo '<p></p>';
            echo form_submit($enviarArray);
            echo form_reset($restablecerArray);
            echo form_close();
            echo '<div id="error">';
            echo validation_errors();
            echo '</div>'
        ?>
        <div id="resultado">
            <h3>Datos de la Cita</h3>
                <?php
                    if(!empty($nombre) && !empty($fecha) && !empty($descripcion)){
                        echo "<p>Nombre: <b>$nombre</b></p>";
                        echo "<p>Fecha: <b>$fecha</b></p>";
                        echo "<p>Descripcion: <b>$descripcion</b></p>";
                    }
                    
                ?>
        </div>
    </body>
</html>
