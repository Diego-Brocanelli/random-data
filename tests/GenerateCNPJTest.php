<?php

declare(strict_types=1);

namespace Random\Tests;

use Random\CNPJ;
use PHPUnit\Framework\TestCase;

class GenerateCNPJTest extends TestCase
{
    /** @test */
    public function generateCnpjSuccessfully()
    {
        foreach (range(0, 1000) as $item) {
            $cnpj   = new CNPJ();
            $number = $cnpj->generate();

            $this->assertTrue(is_string($number));
            $this->assertTrue(strlen($number) === 14);
        }
    }

    /** @test */
    public function generateWithMask()
    {
        foreach (range(0, 1000) as $item) {
            $cnpj   = new CNPJ();
            $number = $cnpj->generateWithMask();

            $this->assertTrue(is_string($number));
            $this->assertTrue(strlen($number) === 18);
        }
    }
}