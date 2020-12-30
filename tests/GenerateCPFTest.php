<?php

declare(strict_types=1);

namespace Random\Tests;

use Random\CPF;
use PHPUnit\Framework\TestCase;

class GenerateCPFTest extends TestCase
{
    /** @test */
    public function generateCPFSuccessfully()
    {
        $cpf    = new CPF();
        $number = $cpf->generate();

        $this->assertTrue(is_string($number));
        $this->assertTrue(strlen($number) === 11);
    }
}