 function telefone(tel) {
	tel.value=tel.value.replace(/\D/g, "");
	// Adiciona parênteses no DDD
	tel.value=tel.value.replace(/^(\d\d)(\d)/g,"($1) $2");
	// Adiciona hífen no número do telefone
	tel.value=tel.value.replace(/(\d{4})(\d)/,"$1-$2");
}