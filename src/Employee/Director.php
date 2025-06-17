<?php

namespace Bank\Employee;

use Bank\Model\Authentic;

class Director extends Employee implements Authentic
{
	public function calculateBonus(): float
	{
		return $this->getSalary() * 2; // Calcula o bônus como o dobro do salário
	}

	public function canAuthenticate(string $password): bool
	{
		return $password === '1234'; // Verifica se a senha é '1234'
	}

}