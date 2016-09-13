function Persona(nombre){
	this.nombre = nombre;
}
Persona.prototype.saveDabaBase = function(){
	var _this = this;
	//Ajax: Sistema de transferencia de datos del cliente al servidor Asincronico
	$.ajax({
		url : "controlador.php",
		type : "GET",
		data : {"nombre":_this.nombre},
		success : function(data){
			alert(data);
		}
	})
}