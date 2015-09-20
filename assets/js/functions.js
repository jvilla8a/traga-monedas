/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
function Jugar(){
	$.ajax({
	  	url: "main.php"
	}).done(function(response) {
	  	var response = JSON.parse(response);
		$("#tablaResultados").html(response.ruleta).fadeIn();
		$("#mensaje").html(response.mensaje);
		$("#puntaje span").text(response.puntaje);
		$("#puntaje").fadeIn();
		$("#reiniciar").fadeIn();

		//Cuando pierde
		if(response.gameover === true){
			$("#jugar").hide();
			$("#tablaResultados").hide();
			$("#gameover").fadeIn();
		}
	});
}

function reiniciar(){
	$.ajax({
		url: "main.php",
		method: "GET",
		data: {'empezar': true}
	}).done(function(){
		window.location.href = "";
	});
}