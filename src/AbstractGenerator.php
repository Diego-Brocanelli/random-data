<?php

declare(strict_types=1);

namespace Random;

use Random\GenerateInterface;

abstract class AbstractGenerator implements GenerateInterface
{
    /**
     * Return rest of equation. Specific for generate CPF
     */
    public function mod(int $dividend, int $divider): int
    {
        $floor  = floor($dividend / $divider);
        $calc   = $dividend - ($floor * $divider);

        return (int)round($calc);
    }

    public function randomNumber(): int
    {
        $calc = (mt_rand() / mt_getrandmax()) * 9;

        return (int)round($calc);
    }
}
