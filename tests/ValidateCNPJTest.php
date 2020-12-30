<?php

declare(strict_types=1);

namespace Random\Tests;

use Random\Validate\CNPJ;
use PHPUnit\Framework\TestCase;

class ValidateCNPJTest extends TestCase
{
    private $cnpj;

    public function setUp(): void
    {
        $this->cnpj = new CNPJ();
    }

    /** @test */
    public function valid()
    {
        $this->assertTrue($this->cnpj->isValid('67233081000140'));
        $this->assertTrue($this->cnpj->isValid('15.925.474/0001-11'));
        $this->assertTrue($this->cnpj->isValid('75193645000197'));
        $this->assertTrue($this->cnpj->isValid(' 26.568.685/0001-60 '));
        $this->assertTrue($this->cnpj->isValid(' 79721575000153'));
        $this->assertTrue($this->cnpj->isValid('13.212.735/0001-20 '));
        $this->assertTrue($this->cnpj->isValid('23473737000127'));
    }

    /** @test */
    public function emptyCNPJ()
    {
        $this->assertFalse($this->cnpj->isValid(''));
    }

    /** @test */
    public function invalid()
    {
        $this->assertFalse($this->cnpj->isValid('12345946415645asadas61654654'));
        $this->assertFalse($this->cnpj->isValid('abclandsandlas2313sd13a'));
        $this->assertFalse($this->cnpj->isValid('dsafadfadfasdf'));
        $this->assertFalse($this->cnpj->isValid('444.555.999-11'));
        $this->assertFalse($this->cnpj->isValid('1321231.561561.51561-106545'));
        $this->assertFalse($this->cnpj->isValid('13.5.1-1'));
        $this->assertFalse($this->cnpj->isValid('11.321.628/1000-05'));
        $this->assertFalse($this->cnpj->isValid('69552514000122'));
        $this->assertFalse($this->cnpj->isValid('03100063405418'));
        $this->assertFalse($this->cnpj->isValid('@$%@$%@'));
        $this->assertFalse($this->cnpj->isValid('00244099000140'));
        $this->assertFalse($this->cnpj->isValid('99999999999999'));
        $this->assertFalse($this->cnpj->isValid('23473737000128'));
    }
}
