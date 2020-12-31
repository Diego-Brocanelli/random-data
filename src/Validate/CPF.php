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

        if ($cpf === null || strlen($cpf) != 11) {
            return false;
        }

        return $this->checkDigits($cpf);
    }

    private function checkDigits(string $cpf): bool
    {
        $result = true;

        $cpfForCheck = str_split($cpf);
        for ($limit = 9; $limit < 11; $limit++) {
            for ($digit = 0, $counter = 0; $counter < $limit; $counter++) {
                $calc   = ($limit + 1) - $counter;
                $digit += (int)$cpfForCheck[$counter] * $calc;
            }

            $digit = ((10 * $digit) % 11) % 10;

            if ($cpfForCheck[$counter] != $digit) {
                $result = false;
            }
        }

        return $result;
    }
}
