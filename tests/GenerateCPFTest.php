<?php

declare(strict_types=1);

namespace Random\Tests;

use Random\CPF;
use PHPUnit\Framework\TestCase;

class GenerateCPFTest extends TestCase
{
    /** @test */
    public function generateCpfSuccessfully()
    {
        $cpf    = new CPF();
        $number = $cpf->generate();

        $this->assertTrue(is_string($number));
        $this->assertTrue(strlen($number) === 11);
    }

    /** @test */
    public function generateWithMask()
    {
        foreach (range(0, 1000) as $item) {
            $cpf   = new CPF();
            $number = $cpf->generateWithMask();

            $this->assertTrue(is_string($number));
            $this->assertTrue(strlen($number) === 14);
        }
    }
}