<?php

declare(strict_types=1);

namespace Random\Validate;

/**
 * @author Diego Brocanelli <contato@diegobrocanelli.com.br>
 */
class CNPJ
{
    /**
     * Code ported from:
     *     - https://github.com/Respect/Validation
     *     - jsfromhell.com
     */
    public function isValid(string $cnpj): bool
    {
        $cnpj = preg_replace('/\D/', '', (string)$cnpj);

        $base = [6, 5, 4, 3, 2, 9, 8, 7, 6, 5, 4, 3, 2];

        if ($cnpj === null || strlen($cnpj) !== 14) {
            return false;
        }

        for (
            $interator = 0,$number = 0;
            $interator < 12;
            $number += (int)$cnpj[$interator] * (int)$base[++$interator]
        );

        if ((int)$cnpj[12] !== ((($number %= 11) < 2) ? 0 : 11 - $number)) {
            return false;
        }

        for (
            (int)$interator = 0, $number = 0;
            $interator <= 12;
            $number += (int)$cnpj[$interator] * (int)$base[$interator++]
        );

        if ((int)$cnpj[13] !== ((($number %= 11) < 2) ? 0 : 11 - $number)) {
            return false;
        }

        return true;
    }
}
