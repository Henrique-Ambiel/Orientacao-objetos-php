<?php

spl_autoload_register(static function (string $class) {
	$prefix = str_replace('Bank\\', 'src', $class);
	$prefix = str_replace('\\', DIRECTORY_SEPARATOR, $prefix);
	$prefix .= '.php';

	// Inclui o arquivo se existir
	if (file_exists($prefix)) {
		require_once $prefix;
	}
});