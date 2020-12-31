<?php

declare(strict_types=1);

namespace Random;

use Random\CPF;
use Random\CNPJ;

/**
 * @author Diego Brocanelli <contato@diegobrocanelli.com.br>
 */
class Faker
{
    public function cpf(): CPF
    {
        return new CPF();
    }

    public function cnpj(): CNPJ
    {
        return new CNPJ();
    }
}
