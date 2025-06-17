<?php

namespace Bank\Model;

/**
 * Classe que representa um endereço.
 *
 * @package Bank\Model
 * @property string $number
 * @property string $street
 * @property string $city
 * @property string $district
 */
final class Address
{
	use PropertiesAccess; // Usa o trait PropertiesAccess para acessar propriedades

	private $number; // Número do endereço (ex.: 123)

	private $street; // Nome da rua (ex.: Av. Paulista)

	private $city; // Cidade (ex.: São Paulo)

	private $district; // Bairro (ex.: Bela Vista)

	// Construtor da classe Model\Address
	public function __construct(string $number, string $street, string $city, string $district)
	{
		$this->number = $number; // Define o número
		$this->street = $street; // Define a rua
		$this->city = $city; // Define a cidade
		$this->district = $district; // Define o bairro
	}

	// Retorna o número do endereço
	public function getNumber(): string
	{
		return $this->number;
	}

	// Retorna o nome da rua
	public function getStreet(): string
	{
		return $this->street;
	}

	// Retorna a cidade
	public function getCity(): string
	{
		return $this->city;
	}

	// Retorna o bairro
	public function getDistrict(): string
	{
		return $this->district;
	}

	// Retorna uma representação em string do endereço
	public function __toString(): string
	{
		return "{$this->street}, {$this->number} - {$this->district}, {$this->city}";
	}
}
