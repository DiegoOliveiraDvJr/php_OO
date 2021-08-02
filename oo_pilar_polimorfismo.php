<?php


	class Carro extends Veiculo {
		public $teto_solar = true;

		function __construct($placa, $cor) {
			$this->placa = $placa;
			$this->cor = $cor;
		}

		function abrirTetoSolar() {
			echo 'Abrir teto solar';
		}

		function alterarPosicaoVolante() {
			echo 'Alterar posição volante';
		}
	}

	class Moto extends Veiculo {
		public $contraPesoGuidao = true;

		function __construct($placa, $cor) {
			$this->placa = $placa;
			$this->cor = $cor;
		}

		function empinar() {
			echo 'Empinar';
		}
		function trocarMarcha(){
			echo 'Desengatar embreagem com a mão  e engatar a marcha com a pé';
		}
	}
	class Caminhao extends Veiculo{
		public $capacidadeCarga = '500kg';
		function __construct($placa, $cor){
			$this->placa = $placa;
			$this->cor = $cor;
		}
	}
	class Veiculo {
		public $placa = null;
		public $cor = null;

		function acelerar() {
			echo 'Acelerar';
		}

		function freiar() {
			echo 'Freiar';
		}
		function trocarMarcha(){
			echo 'Desengatar embreagem com o pé e engatar a marcha com a mão';
		}
	}

	$carro = new Carro('ABC1234', 'Branco');
	$carro->trocarMarcha();
	echo '</br>';
	$moto = new Moto('DEF1122', 'Preto');
	$moto->trocarMarcha();
	echo '</br>';
	$caminhao = new Caminhao('CDF2233', 'Rosa');
	$caminhao->trocarMarcha();