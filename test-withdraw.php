<?php

use Bank\Model\Account\SavingsAccount;
use Bank\Model\CPF;
use Bank\Model\Address;
use Bank\Model\Account\Holder;
use Bank\Model\Account\CurrentAccount;

require_once 'autoload.php'; // Carrega o autoloader para incluir automaticamente as classes do namespace Bank\Model

// Cria uma nova conta bancária com um titular
$account = new SavingsAccount(
	new Holder(
		'João da Silva',
		new CPF('123.456.789-00'),
		new Address('123', 'Av. Paulista', 'São Paulo', 'Bela Vista')
	)
);

$account->deposit(1000); // Deposita 1000 na conta
$account->withdraw(200); // Realiza um saque de 200

echo "Saldo após saque: " . $account->getBalance() . PHP_EOL; // Exibe o saldo atual da conta