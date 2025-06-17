<?php

require_once 'autoload.php'; // Carrega o autoloader para incluir automaticamente as classes do namespace Bank\Model

// Importa as classes necessárias
use Bank\Model\CPF;
use Bank\Model\Address;
use Bank\Model\Account\Holder;
use Bank\Model\Account\Account;
use Bank\Model\Account\SavingsAccount;
use Bank\Model\Account\CurrentAccount;

$address = new Address('123', 'Rua das Flores', 'São Paulo', 'Centro'); // Cria um objeto Model\Address com dados do endereço
$vinicius = new Holder(new CPF('123.456.789-10'), 'Vinicius Dias', $address); // Cria um objeto Model\Account\Holder (titular) com Model\CPF, nome e endereço
$firstAccount = new SavingsAccount($vinicius); // Cria a primeira conta associada ao titular Vinicius
$firstAccount->deposit(500); // Deposita 500 na conta
$firstAccount->withdraw(300); // Realiza um saque de 300 — operação válida, pois há saldo suficiente

echo $firstAccount->getHolderName() . PHP_EOL; // Exibe o nome do titular da conta
echo $firstAccount->getHolderCpf() . PHP_EOL; // Exibe o Model\CPF do titular da conta (objeto Model\CPF convertido para string, dependendo do método __toString ou getNumber)
echo $firstAccount->getBalance() . PHP_EOL; // Exibe o saldo atual da conta

$patricia = new Holder(new CPF('698.549.548-10'), 'Patricia', $address); // Cria um novo titular Patricia com Model\CPF e mesmo endereço anterior
$secondAccount = new CurrentAccount($patricia); // Cria uma segunda conta para Patricia
var_dump($secondAccount); // Exibe informações detalhadas da segunda conta para depuração

$newAddress = new Address('456', 'Rua das Palmeiras', 'São Paulo', 'Centro'); // Cria um novo endereço diferente
$other = new CurrentAccount(new Holder(new CPF('123.654.789-01'), 'Abcdefg', $newAddress)); // Cria uma nova conta para um titular novo, com nome, Model\CPF e novo endereço
unset($secondAccount); // Destrói a segunda conta (de Patricia), chamando o destrutor da classe Model\Account\Account
echo Account::getNumberOfAccounts(); // Exibe o número atual de contas ativas (conta de Vinicius e a última criada)
