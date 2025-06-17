<?php

namespace Bank\Service;

use Bank\Employee\Employee;

class BonusController
{
	private $bonusTotal = 0; // Total de bônus acumulados

	public function addBonus(Employee $employee): void
	{
		$this->bonusTotal += $employee->calculateBonus(); // Adiciona o bônus do funcionário ao total
	}

	public function getBonusTotal(): float
	{
		return $this->bonusTotal; // Retorna o total de bônus acumulados
	}

}