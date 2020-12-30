<?php

declare(strict_types=1);

namespace Random\Tests;

use Random\CNPJ;
use PHPUnit\Framework\TestCase;

class GenerateCNPJTest extends TestCase
{
    /** @test */
    public function generateCNPJSuccessfully()
    {
        $cnpj   = new CNPJ();
        $number = $cnpj->generate();

        $this->assertTrue(is_string($number));
        $this->assertTrue(strlen($number) === 14);
    }
}