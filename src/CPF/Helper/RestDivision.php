<?php

namespace CPF\Helper;

class RestDivision
{
    /**
     * Return rest of equation. Specific for generate CPF
     * @param  int $dividend references $n*
     * @param  int $divider
     * @return int
     */
    public function rest($dividend, $divider)
    {
        return round( $dividend - ( floor($dividend / $divider ) * $divider ) );
    }
}