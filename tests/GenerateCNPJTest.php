<?php

use Random\Generate\CNPJ\CNPJ;
use PHPUnit\Framework\TestCase;

class GerarCNPJTest extends TestCase
{
    public function testGenerateCNPJSuccessfully()
    {
        $CNPJ = new CNPJ();

        $this->assertTrue( is_string( $CNPJ->generate() ) );
        $this->assertTrue( strlen( $CNPJ->generate() ) == 14 );
    }
}