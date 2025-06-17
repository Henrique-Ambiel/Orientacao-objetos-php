<?php

namespace Bank\Employee;

class VideoEditor extends Employee
{
	public function calculateBonus(): float
	{
		return 600.0; // Bônus fixo de 600 para editores de vídeo
	}
}