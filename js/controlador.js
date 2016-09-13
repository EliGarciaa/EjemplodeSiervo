$("#guardar").click(saveName);

function saveName(){
	var nombre = document.getElementById("nombre").value;
	var usuario = new Persona(nombre);
	usuario.saveDabaBase();
}