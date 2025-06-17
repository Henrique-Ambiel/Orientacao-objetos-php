<?php

namespace Bank\Model\Account;

// Classe abstrata que representa uma Conta bancária
use Bank\Model\CPF;

abstract class Account
{
	private $holder; // Titular da conta (objeto Model\Account\Holder)

	protected $balance; // Saldo da conta

	private static $numberOfAccounts = 0; // Contador estático do número de contas criadas

	// Construtor da conta, recebe um titular e inicia saldo zero
	public function __construct(Holder $holder)
	{
		$this->holder = $holder; // Define o titular da conta
		$this->balance = 0; // Inicializa saldo com zero

		self::$numberOfAccounts++; // Incrementa o contador de contas criadas
	}

	// Destrutor da conta, decrementa o contador ao destruir objeto
	public function __destruct()
	{
		self::$numberOfAccounts--; // Decrementa o contador de contas
	}

	// Método para sacar um valor da conta
	public function withdraw(float $amountWithdrawn): void
	{
		$taxWithdraw = $amountWithdrawn * $this->percentageTax(); // Calcula taxa de 5% sobre o valor do saque
		$amountWithdrawal = $amountWithdrawn + $taxWithdraw; // Adiciona a taxa ao valor do saque

		if ($amountWithdrawal > $this->balance) { // Verifica se o saldo é suficiente
			echo "Saldo indisponível"; // Mensagem de saldo insuficiente

			return; // Sai do método sem alterar saldo
		}

		$this->balance -= $amountWithdrawal; // Deduz o valor do saldo
	}

	// Método para depositar um valor na conta
	public function deposit(float $amountDeposit): void
	{
		if ($amountDeposit < 0) { // Verifica se o valor é positivo
			echo "Valor precisa ser positivo"; // Mensagem de erro para valor negativo

			return; // Sai do método sem alterar saldo
		}

		$this->balance += $amountDeposit; // Soma o valor ao saldo
	}

	// Retorna o saldo atual da conta
	public function getBalance(): float
	{
		return $this->balance;
	}

	// Retorna o nome do titular da conta
	public function getHolderName(): string
	{
		return $this->holder->getName();
	}

	// Retorna o Model\CPF do titular da conta
	public function getHolderCpf(): CPF
	{
		return $this->holder->getCpf();
	}

	// Retorna o número total de contas criadas (método estático)
	public static function getNumberOfAccounts(): int
	{
		return self::$numberOfAccounts;
	}

	// Método abstrato para taxa de porcentagem, deve ser implementado nas subclasses
	abstract protected function percentageTax(): float;
}
