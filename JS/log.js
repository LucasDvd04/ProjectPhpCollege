function verificarLogado() {
	alert("Carregou!");
	// Verifica a existência de login
	if(getcookie("email") != null) {
		alert("Achou!");
		// Em caso afirmativo, direciona para a página restrita
		window.location.href = "restrita.html";
	}
	else {
		alert("Nao achou!");
	}
}
