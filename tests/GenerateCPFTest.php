<?php

declare(strict_types=1);

namespace Random\Tests;

use Random\CPF;
use Random\Faker;
use PHPUnit\Framework\TestCase;
use SebastianBergmann\Type\VoidType;

class GenerateCPFTest extends TestCase
{
    private CPF $cpf;

    public function setUp(): void
    {
        $this->cpf = (new Faker())->cpf();
    }

    /** @test */
    public function generateCpfSuccessfully()
    {
        $number = $this->cpf->generate();

        $this->assertTrue(is_string($number));
        $this->assertTrue(strlen($number) === 11);
    }

    /** @test */
    public function generateWithMask()
    {
        foreach (range(0, 1000) as $item) {
            $number = $this->cpf->generateWithMask();

            $this->assertTrue(is_string($number));
            $this->assertTrue(strlen($number) === 14);
        }
    }
}