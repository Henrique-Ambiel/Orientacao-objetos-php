<?php

namespace Bank\Model;

// Classe abstrata que representa uma Pessoa
abstract class Person
{
	use PropertiesAccess; // Usa o trait PropertiesAccess para acessar propriedades

	protected $name; // Nome da pessoa (acessível na própria classe e em heranças)

	private $cpf; // Model\CPF da pessoa (acessível apenas dentro da classe)

	// Construtor da classe Model\Person
	public function __construct(string $name, CPF $cpf)
	{
		$this->name = $name; // Define o nome
		$this->validateName($name); // Valida se o nome tem pelo menos 5 caracteres
		$this->cpf = $cpf; // Define o Model\CPF
	}

	// Retorna o nome da pessoa
	public function getName(): string
	{
		return $this->name;
	}

	// Retorna o Model\CPF da pessoa (objeto do tipo Model\CPF)
	public function getCpf(): CPF
	{
		return $this->cpf;
	}

	// Valida se o nome tem no mínimo 5 caracteres (não é possível sobrescrevê-lo)
	final protected function validateName(string $holderName): void
	{
		if (strlen($holderName) < 5) { // Se tiver menos de 5 caracteres
			echo "Nome precisa ter pelo menos 5 caracteres";
			exit(); // Encerra o programa
		}
	}
}
