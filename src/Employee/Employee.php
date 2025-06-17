<?php

namespace Bank\Employee;

// Classe abstrata que representa um Funcionário (herda de Model\Person)
use Bank\Model\CPF;
use Bank\Model\Person;

abstract class Employee extends Person
{
	private $salary; // Salário do funcionário (acessível apenas dentro da classe)

	// Construtor da classe Model\Employee
	public function __construct(string $name, CPF $cpf, float $salary)
	{
		parent::__construct($name, $cpf); // Chama o construtor da classe Model\Person (nome e Model\CPF)
		$this->salary = $salary; // Define o salário
	}

	public function getSalary(): float
	{
		return $this->salary; // Retorna o salário do funcionário
	}

	// Altera o nome do funcionário
	public function changeName(string $name): void
	{
		$this->validateName($name); // Valida se o novo nome tem pelo menos 5 caracteres
		$this->name = $name; // Atualiza o nome
	}

	public function receiveIncrease(float $increaseAmount): void
	{
		if ($increaseAmount < 0) {
			echo "Aumento não pode ser negativo.\n"; // Exibe mensagem de erro se o aumento for negativo

			return; // Sai do método sem alterar o salário
		}

		$this->salary += $increaseAmount; // Adiciona o aumento ao salário atual
		echo "Salário atualizado para: " . $this->salary . "\n"; // Exibe o novo salário
	}

	abstract public function calculateBonus(): float; // Método abstrato para calcular bônus, deve ser implementado nas classes filhas
}
