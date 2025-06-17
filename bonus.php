<?php

require_once 'autoload.php';

use Bank\Model\CPF;
use Bank\Employee\Employee;
use Bank\Employee\Director;
use Bank\Service\BonusController;

$director = new Director(
	'Maria Oliveira',
	new CPF('987.654.321-00'),
	'Gerente de Projetos'
);

$bonusController = new BonusController();
$bonusController->addBonus($director);

echo "Total de bônus acumulados: " . $bonusController->getBonusTotal() . PHP_EOL; // Exibe o total de bônus acumulados