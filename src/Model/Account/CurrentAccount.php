<?php

namespace Bank\Model\Account;

//Classe que representa uma Conta Corrente
class CurrentAccount extends Account
{

	protected function percentageTax(): float
	{
		return 0.05; // Retorna a taxa de 5% para saques na conta corrente
	}

	// Método para transferir um valor para outra conta
	public function transfer(float $amountTransfer, Account $destinationAccount): void
	{
		if ($amountTransfer > $this->balance) { // Verifica saldo suficiente para transferência
			echo "Saldo indisponível"; // Mensagem de saldo insuficiente

			return; // Sai do método
		}

		$this->withdraw($amountTransfer);            // Retira o valor da conta atual
		$destinationAccount->deposit($amountTransfer);// Deposita o valor na conta destino
	}

}