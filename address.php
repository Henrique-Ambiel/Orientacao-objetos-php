<?php

require_once 'autoload.php';

use Bank\Model\Address;

$address = new Address('123', 'Av. Paulista', 'São Paulo', 'Bela Vista');

echo $address->street; // Acessa o nome da rua diretamente
echo "Endereço: " . $address . PHP_EOL; // Exibe o endereço formatado