<?php

namespace Bank\Model\Account;

use Bank\Model\CPF;
use Bank\Model\Person;
use Bank\Model\Address;
use Bank\Model\Authentic;

// Classe que representa um Titular (herda de Model\Person)
class Holder extends Person implements Authentic
{
	private $address; // Endereço do titular (acessível apenas dentro da classe)

	// Construtor da classe Model\Account\Holder
	public function __construct(string $name, CPF $cpf, Address $address)
	{
		parent::__construct($name, $cpf); // Chama o construtor da classe Model\Person (nome e Model\CPF)
		$this->address = $address; // Define o endereço
	}

	// Retorna o endereço do titular
	public function getAddress(): Address
	{
		return $this->address;
	}

	public function canAuthenticate(string $password): bool
	{
		return $password === 'abcd';
	}
}

