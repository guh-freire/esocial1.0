function adicionaCampo(){
	var campo = document.createElement("INPUT");
	campo.setAttribute("name", "arquivo[]");
	campo.setAttribute("type", "file");
	campo.setAttribute("filial", "filial");
	campo.setAttribute("nome", "nome");
	result.appendChild(campo);
}