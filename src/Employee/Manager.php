<?php

namespace Bank\Employee;

use Bank\Model\Authentic;

class Manager extends Employee implements Authentic
{
	public function calculateBonus(): float
	{
		return $this->getSalary(); // Calcula o bônus como 100% do salário
	}

	public function canAuthenticate(string $password): bool
	{
		return $password === 'manager123'; // Verifica se a senha é 'manager123'
	}
}