<?php

declare(strict_types=1);

namespace Random\Validate;

/**
 * @author Diego Brocanelli <contato@diegobrocanelli.com.br>
 */
class CPF
{
    public function isValid(string $cpf): bool
    {
        if (empty($cpf)) {
            return false;
        }

        $cpf = preg_replace('/\D/', '', $cpf);

        if (strlen($cpf) != 11) {
            return false;
        }

        return $this->checkDigits($cpf);
    }

    private function checkDigits(string $cpf): bool
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
