<?php

declare(strict_types=1);

namespace Random\Tests;

use Random\CPF;
use Random\Faker;
use PHPUnit\Framework\TestCase;

class ValidateCPFTest extends TestCase
{
    private CPF $cpf;

    public function setUp(): void
    {
        $this->cpf = (new Faker())->cpf();
    }

    /** @test */
    public function valid()
    {
        $this->assertTrue($this->cpf->isValid('46516533407'));
        $this->assertTrue($this->cpf->isValid('590.667.041-60'));
        $this->assertTrue($this->cpf->isValid('57188778663'));
        $this->assertTrue($this->cpf->isValid('551.053.171-14'));
        $this->assertTrue($this->cpf->isValid('80591656078'));
        $this->assertTrue($this->cpf->isValid('548.576.145-37'));

        $cpf = new CPF;
        foreach (range(1, 9999) as $item) {
            $this->assertTrue($this->cpf->isValid($cpf->generate()));
            $this->assertTrue($this->cpf->isValid($cpf->generateWithMask()));
        }
    }

    /** @test */
    public function emptyCpf()
    {
        $this->assertFalse($this->cpf->isValid(''));
    }

    /** @test */
    public function invalid()
    {
        $this->assertFalse($this->cpf->isValid('1234594641564561654654'));
        $this->assertFalse($this->cpf->isValid('abclandsandlas'));
        $this->assertFalse($this->cpf->isValid('444.555.999-11'));
        $this->assertFalse($this->cpf->isValid('1321231.561561.51561-106545'));
        $this->assertFalse($this->cpf->isValid('13.5.1-1'));
    }
}
