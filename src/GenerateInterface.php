<?php

declare(strict_types=1);

namespace Random;

interface GenerateInterface
{
    /**
     * Return rest of equation. Specific for generate CPF
     */
    public function mod(int $dividend, int $divider): int;

    /**
     * Generate a value for $n*
     */
    public function randomNumber(): int;
}
