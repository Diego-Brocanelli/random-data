<?php

declare(strict_types=1);

namespace Random\Tests;

use Random\Faker;
use Random\CNPJ;
use PHPUnit\Framework\TestCase;

class GenerateCNPJTest extends TestCase
{
    private CNPJ $cnpj;

    public function setup(): void
    {
        $this->cnpj = (new Faker())->cnpj();
    }

    /** @test */
    public function generate()
    {
        foreach (range(0, 1000) as $item) {
            $number = $this->cnpj->generate();

            $this->assertTrue(is_string($number));
            $this->assertTrue(strlen($number) === 14);
        }
    }

    /** @test */
    public function withMask()
    {
        foreach (range(0, 1000) as $item) {
            $number = $this->cnpj->generateWithMask();

            $this->assertTrue(is_string($number));
            $this->assertTrue(strlen($number) === 18);
        }
    }
}