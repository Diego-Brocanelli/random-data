<?php

use Random\Generate\CPF\CPF;
use PHPUnit\Framework\TestCase;

class GerarCPFTest extends TestCase
{
    public function testGenerateCPFSuccessfully()
    {
        $CPF = new CPF();

        $this->assertTrue( is_string( $CPF->generate() ) );
        $this->assertTrue( strlen( $CPF->generate() ) == 11 );
    }
}