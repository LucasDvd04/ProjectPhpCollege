<?php
	class Pessoa {
		private $nome;
		private $senha;
		private $email;
		private $tel;
		private $endereco;
		private $Dt_Nascimento;		

		function __construct ($varnome, $varsenha, $varemail, $vartelefone , $varendereco,$varDt_Nascimento) { // método construtor da classe

			$this->nome = $varnome;
			$this->senha = $varsenha;
			$this->email = $varemail;
			$this->tel = $vartelefone;
			$this->endereco = $varendereco;
			$this->Dt_Nascimento = $varDt_Nascimento;
		}

		public function getNome() {
			return $this->nome;
		}

		public function getSenha() {
			return $this->senha;
		}

		public function getEmail() {
			return $this->email;
		}

		public function getTel() {
			return $this->tel;
		}

		public function getEndereco() {
			return $this->endereco;
		}
		public function getDt_Nascimento() {
			return $this->Dt_Nascimento;
		}		

		
		// Inserir métodos set para os demais atributos

	}
?>