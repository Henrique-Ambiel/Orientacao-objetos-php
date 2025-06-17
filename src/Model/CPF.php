<?php

namespace Bank\Model;

// Classe que representa um Model\CPF (Cadastro de Pessoa Física)
final class CPF
{
	private $number; // Número do Model\CPF (acessível apenas dentro da classe)

	// Construtor da classe Model\CPF
	public function __construct(string $number)
	{
		// Valida se o Model\CPF está no formato 000.000.000-00
		$number = filter_var($number, FILTER_VALIDATE_REGEXP, [
			'options' => [
				'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/',
			],
		]);

		if ($number === false) { // Se o Model\CPF for inválido
			echo "Cpf inválido"; // Exibe mensagem de erro
			exit(); // Encerra o programa
		}

		$this->number = $number; // Define o Model\CPF válido
	}

	// Retorna o número do Model\CPF
	public function getNumber(): string
	{
		return $this->number;
	}
}

