<?php

use Random\Validate\CPF\CPF as ValidateCPF;
use PHPUnit\Framework\TestCase;

class ValidateCPFTest extends TestCase
{
    private $CPF;

    public function setUp()
    {
        $this->CPF = new ValidateCPF();
    }

    public function testCPFIsValid()
    {
        $this->assertTrue( $this->CPF->isValid('46516533407') );
        $this->assertTrue( $this->CPF->isValid('590.667.041-60') );
        $this->assertTrue( $this->CPF->isValid('57188778663') );
        $this->assertTrue( $this->CPF->isValid('551.053.171-14') );
        $this->assertTrue( $this->CPF->isValid('80591656078') );
        $this->assertTrue( $this->CPF->isValid('548.576.145-37') );
    }

    public function testEmptyCPF()
    {
        $this->assertFalse( $this->CPF->isValid('') );
    }

    public function testInvalidCPF()
    {
        $this->assertFalse( $this->CPF->isValid('1234594641564561654654') );
        $this->assertFalse( $this->CPF->isValid('abclandsandlas') );
        $this->assertFalse( $this->CPF->isValid('444.555.999-11') );
        $this->assertFalse( $this->CPF->isValid('1321231.561561.51561-106545') );
        $this->assertFalse( $this->CPF->isValid('13.5.1-1') );
    }
}