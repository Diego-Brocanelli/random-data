<?php
namespace Random\Generate;

use Random\Generate\GenerateInterface;

abstract class AbstractGenerator implements GenerateInterface
{
    /**
     * Return rest of equation. Specific for generate CPF
     * @param  int $dividend references $n*
     * @param  int $divider
     * @return int
     */
    public function mod($dividend, $divider)
    {
        return round( $dividend - ( floor($dividend / $divider ) * $divider ) );
    }

    /**
     * Generate a value for $n*
     * @return int
     */
    public function randomNumber()
    {
        $number = round( ( mt_rand() / mt_getrandmax() ) * 9 );

        return $number;
    }
}