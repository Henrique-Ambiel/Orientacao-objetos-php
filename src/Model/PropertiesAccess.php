<?php

namespace Bank\Model;

/// Classe que permite acesso a propriedades através de métodos mágicos
trait PropertiesAccess
{
	public function __get(string $name)
	{
		$method = 'recupera' . ucfirst($name);

		return $this->$method();
	}

	public function __set($name, $value)
	{
		$method = 'altera' . ucfirst($name);

		return $this->$method($value);
	}

}