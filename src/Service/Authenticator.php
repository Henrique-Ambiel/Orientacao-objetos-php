<?php

namespace Bank\Service;

use Bank\Employee\Director;

class Authenticator
{
	public function tryLogin(Director $director, string $password): bool
	{
		if($director->canAuthenticate($password)) {
			echo "Login bem-sucedido para o diretor: " . $director->getName() . "\n";
		} else {
			echo "Falha no login para o diretor: " . $director->getName() . "\n";
		}
		// Retorna o resultado da autenticação
		return $director->canAuthenticate($password);
	}
}