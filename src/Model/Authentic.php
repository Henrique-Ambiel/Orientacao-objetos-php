<?php

namespace Bank\Model;

interface Authentic // Interface para objetos que podem ser autenticados
{
	// Verifica se o objeto pode ser autenticado com a senha fornecida
	public function canAuthenticate(string $password): bool;
}