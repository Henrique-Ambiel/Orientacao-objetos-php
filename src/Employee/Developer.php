<?php

namespace Bank\Employee;

class Developer extends Employee
{
	public function updateRole(string $newRole): void
	{
		$this->receiveIncrease($this->getSalary() * 0.75); // Aumenta o salário em 75% ao atualizar o cargo
	}

	public function calculateBonus(): float
	{
		return 500.0; //Bônus fixo de 500 para desenvolvedores
	}
}