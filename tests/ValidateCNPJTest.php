<?php

use Random\Validate\CNPJ\CNPJ as ValidateCNPJ;
use PHPUnit\Framework\TestCase;

class ValidateCNPJTest extends TestCase
{
    private $CNPJ;

    public function setUp()
    {
        $this->CNPJ = new ValidateCNPJ();
    }

    public function testCNPJIsValid()
    {
        $this->assertTrue( $this->CNPJ->isValid('67233081000140') );
        $this->assertTrue( $this->CNPJ->isValid('15.925.474/0001-11') );
        $this->assertTrue( $this->CNPJ->isValid('75193645000197') );
        $this->assertTrue( $this->CNPJ->isValid(' 26.568.685/0001-60 ') );
        $this->assertTrue( $this->CNPJ->isValid(' 79721575000153') );
        $this->assertTrue( $this->CNPJ->isValid('13.212.735/0001-20 ') );
        $this->assertTrue( $this->CNPJ->isValid('23473737000127') );
    }

    public function testEmptyCNPJ()
    {
        $this->assertFalse( $this->CNPJ->isValid('') );
    }

    public function testInvalidCNPJ()
    {
        $this->assertFalse( $this->CNPJ->isValid('12345946415645asadas61654654') );
        $this->assertFalse( $this->CNPJ->isValid('abclandsandlas2313sd13a') );
        $this->assertFalse( $this->CNPJ->isValid('dsafadfadfasdf') );
        $this->assertFalse( $this->CNPJ->isValid('444.555.999-11') );
        $this->assertFalse( $this->CNPJ->isValid('1321231.561561.51561-106545') );
        $this->assertFalse( $this->CNPJ->isValid('13.5.1-1') );
        $this->assertFalse( $this->CNPJ->isValid('11.321.628/1000-05') );
        $this->assertFalse( $this->CNPJ->isValid('69552514000122') );
        $this->assertFalse( $this->CNPJ->isValid('03100063405418') );
        $this->assertFalse( $this->CNPJ->isValid('@$%@$%@') );
        $this->assertFalse( $this->CNPJ->isValid('00244099000140') );
        $this->assertFalse( $this->CNPJ->isValid('99999999999999') );
        $this->assertFalse( $this->CNPJ->isValid('23473737000128') );
    }
}