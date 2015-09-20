<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Tragamonedas</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="assets/js/functions.js"></script>
</head>
        
<body>
    
    <div id="gameover" style="display: none; position: absolute; width: 100%;"><img src="assets/images/Game_Over.png" style="width: 100%;"/></div>
    <div id="mensaje" style="padding-top: 51px; position: relative;"></div>
    <div class="container" style="padding: 15px;">
      <div id="moneda">
          <div id="puntaje" align="center" style="display: none; position: relative;"><h2 style="text-align: center; color: black;">Puntos: <span></span></h2></div>
          <div id="tablaResultados" align="center" style="display: none;"></div>
          
            <div class="container" align="center" style="padding-top: 25px; position: relative;">
              <div id="jugar"><a href="#" onclick="Jugar();"><img src="assets/images/btn.png" width="200 px"></a></div>
              <div id="reiniciar" style="display: none; padding-top: 15px;"><a href="#" onclick="reiniciar();"><img src="assets/images/btn2.png" width="200 px"/></a></div>
            </div>
      </div>     
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
</body>
</html>
