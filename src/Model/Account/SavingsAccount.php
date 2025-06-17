<?php

namespace Bank\Model\Account;

// Classe que representa uma Conta Poupança
class SavingsAccount extends Account
{
	protected function percentageTax(): float
	{
		return 0.03; // Retorna a taxa de 3% para saques na conta poupança
	}
}