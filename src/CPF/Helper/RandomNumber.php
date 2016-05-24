<?php

namespace CPF\Helper;

class RandomNumber
{
    /**
     * Generate a value for $n*
     * @return int
     */
    public function generate()
    {
        $number = round( ( mt_rand() / mt_getrandmax() ) * 9 );

        return $number;
    }
}