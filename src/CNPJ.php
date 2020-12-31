<?php

declare(strict_types=1);

namespace Random;

use Random\AbstractGenerator;

class CNPJ extends AbstractGenerator
{
    public function generate(): string
    {
        $number1  = $this->randomNumber();
        $number2  = $this->randomNumber();
        $number3  = $this->randomNumber();
        $number4  = $this->randomNumber();
        $number5  = $this->randomNumber();
        $number6  = $this->randomNumber();
        $number7  = $this->randomNumber();
        $number8  = $this->randomNumber();
        $number9  = 0;
        $number10 = 0;
        $number11 = 0;
        $number12 = 1;

        $sumD1  = ($number12 * 2) + ($number11 * 3) + ($number10 * 4);
        $sumD1 += ($number9 * 5) + ($number8 * 6) + ($number7 * 7);
        $sumD1 += ($number6 * 8) + ($number5 * 9) + ($number4 * 2);
        $sumD1 += ($number3 * 3) + ($number2 * 4) + ($number1 * 5);

        $digit1 = 11 - ($this->mod($sumD1, 11));

        if ($digit1 >= 10) {
            $digit1 = 0 ;
        }

        $sumD2  = ($digit1 * 2) + ($number12 * 3) + ($number11 * 4);
        $sumD2 += ($number10 * 5) + ($number9 * 6) + ($number8 * 7);
        $sumD2 += ($number7 * 8) + ($number6 * 9) + ($number5 * 2);
        $sumD2 += ($number4 * 3) + ($number3 * 4) + ($number2 * 5);
        $sumD2 += ($number1 * 6);

        $digit2 = 11 - ($this->mod($sumD2, 11));

        if ($digit2 >= 10) {
            $digit2 = 0;
        }

        $retorno  = $number1 . $number2 . $number3;
        $retorno .= $number4 . $number5 . $number6;
        $retorno .= $number7 . $number8 . $number9;
        $retorno .= $number10 . $number11 . $number12;
        $retorno .= $digit1 . $digit2;

        return $retorno;
    }

    public function generateWithMask(): string
    {
        $cnpj  = $this->generate();
        $split = str_split($cnpj);

        $result  = $split[0] . $split[1];
        $result .= '.';
        $result .= $split[2] . $split[3] . $split[4];
        $result .= '.';
        $result .= $split[5] . $split[6] . $split[7];
        $result .= '/';
        $result .= $split[8] . $split[9] . $split[10] . $split[11];
        $result .= '-';
        $result .= $split[12] . $split[13];

        return $result;
    }
}
