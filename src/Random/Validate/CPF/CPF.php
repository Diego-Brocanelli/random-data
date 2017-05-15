<?php

namespace Random\Validate\CPF;

/**
 * @author Diego Brocanelli <contato@diegobrocanelli.com.br>
 */
class CPF
{
    /**
     * Validate the CPF
     * @param  string  $cpf
     * @return boolean
     */
    public function isValid($cpf)
    {
        if(empty($cpf))
        {
            return false;
        }

        $cpf = preg_replace('/\D/', '', $cpf);

        if(strlen($cpf) != 11){
            return false;
        }

        return $this->checkDigits($cpf);
    }

    /**
     * To analyze the structure of the CPF
     * @param  string $cpf
     * @return bolean
     */
    private function checkDigits($cpf)
    {
        $result = true;

        for ($limit = 9; $limit < 11; $limit++) {
             
            for ($digit = 0, $counter = 0; $counter < $limit; $counter++) {
                $digit += $cpf{$counter} * ( ($limit + 1) - $counter );
            }
            
            $digit = ((10 * $digit) % 11) % 10;
            
            if ($cpf{$counter} != $digit) {
                $result =  false;
            }
        }

        return $result;
    }
}
