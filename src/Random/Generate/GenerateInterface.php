<?php

namespace Random\Generate;

interface GenerateInterface
{
    /**
     * Return rest of equation. Specific for generate CPF
     * @param  int $dividend references $n*
     * @param  int $divider
     * @return int
     */
    public function mod($dividend, $divider);

    /**
     * Generate a value for $n*
     * @return int
     */
    public function randomNumber();
}