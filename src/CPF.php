<?php

declare(strict_types=1);

namespace Random;

use Random\AbstractGenerator;

/**
 * @author Diego Brocanelli <contato@diegobrocanelli.com.br>
 */
class CPF extends AbstractGenerator
{
    public function generate(): string
    {
        $eleven = 11;

        $number1 = $this->randomNumber();
        $number2 = $this->randomNumber();
        $number3 = $this->randomNumber();
        $number4 = $this->randomNumber();
        $number5 = $this->randomNumber();
        $number6 = $this->randomNumber();
        $number7 = $this->randomNumber();
        $number8 = $this->randomNumber();
        $number9 = $this->randomNumber();

        $sumD1  = ($number9 * 2) + ($number8 * 3) + ($number7 * 4);
        $sumD1 += ($number6 * 5) + ($number5 * 6) + ($number4 * 7);
        $sumD1 += ($number3 * 8) + ($number2 * 9) + ($number1 * 10);
        $sumD1 += ($number5 * 6) + ($number4 * 7) + ($number3 * 8);
        $sumD1 += ($number2 * 9) + ($number1 * 10);

        $digit1 = $eleven - ($this->mod($sumD1, $eleven));

        if ($digit1 >= 10) {
            $digit1 = 0;
        }

        $sumD2  = ($digit1 * 2) + ($number9 * 3) + ($number8 * 4);
        $sumD2 += ($number7 * 5) + ($number6 * 6) + ($number5 * 7);
        $sumD2 += ($number4 * 8) + ($number3 * 9) + ($number2 * 10);
        $sumD2 += ($number1 * 11);

        $digit2 = $eleven - ($this->mod($sumD2, $eleven));

        if ($digit2 >= 10) {
            $digit2 = 0;
        }

        $cpf  = $number1 . $number2 . $number3;
        $cpf .= $number4 . $number5 . $number6;
        $cpf .= $number7 . $number8 . $number9;
        $cpf .= $digit1 . $digit2;

        return $cpf;
    }

    public function generateWithMask(): string
    {
        $cpf   = $this->generate();
        $split = str_split($cpf);

        $result  = $split[0] . $split[1] . $split[2];
        $result .= '.';
        $result .= $split[3] . $split[4] . $split[5];
        $result .= '.';
        $result .= $split[6] . $split[7] . $split[8];
        $result .= '-';
        $result .= $split[9] . $split[10];

        return $result;
    }
}
