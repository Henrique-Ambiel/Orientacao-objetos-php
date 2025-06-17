<?php

require_once 'autoload.php';

use Bank\Model\CPF;
use Bank\Employee\Director;
use Bank\Service\Authenticator;

$authenticator = new Authenticator();
$director = new Director(
	'Maria Oliveira',
	new CPF('987.654.321-00'),
	2000.00
);

$authenticator->tryLogin($director, '4321'); // Tenta fazer login com a senha '4321'