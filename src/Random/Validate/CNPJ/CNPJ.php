<?php

namespace Random\Validate\CNPJ;

/**
 * @author Diego Brocanelli <contato@diegobrocanelli.com.br>
 */
class CNPJ
{
    /**
     * Validate the CNPJ
     * 
     * Code ported from:
     *     - https://github.com/Respect/Validation
     *     - jsfromhell.com
     * 
     * @param  string  $cnpj
     * @return boolean      
     */
    public function isValid($cnpj)
    {
        $cnpj = preg_replace('/\D/', '', $cnpj);
        
        $base = array(6, 5, 4, 3, 2, 9, 8, 7, 6, 5, 4, 3, 2);
        
        if ( strlen($cnpj) != 14 ) {
            return false;
        }
        
        for ( $interator = 0, $number = 0; $interator < 12; $number += $cnpj[$interator] * $base[++$interator] );
        
        if ( $cnpj[12] != ( ( ( $number %= 11 ) < 2) ? 0 : 11 - $number ) ) {
            return false;
        }
        
        for ( $interator = 0, $number = 0; $interator <= 12; $number += $cnpj[$interator] * $base[$interator++] );
        
        if ( $cnpj[13] != ( ( ( $number %= 11 ) < 2 ) ? 0 : 11 - $number ) ) {
            return false;
        }
        
        return true;
    }
}
