<?php

namespace CPF;

use CPF\Helper\RandomNumber;
use CPF\Helper\RestDivision;

/**
 * @author Diego Brocanelli <contato@diegobrocanelli.com.br>
 */
class CPF
{
    /**
     * Generate CPF valid.
     * @return string
     */
    public function generate()
    {
        $eleven = 11;
        $randomNumber = new RandomNumber();

        $n1 = $randomNumber->generate();    
        $n2 = $randomNumber->generate();    
        $n3 = $randomNumber->generate();    
        $n4 = $randomNumber->generate();    
        $n5 = $randomNumber->generate();    
        $n6 = $randomNumber->generate();    
        $n7 = $randomNumber->generate();    
        $n8 = $randomNumber->generate();    
        $n9 = $randomNumber->generate();    

        $restDivision = new RestDivision();

        $sumD1 = ($n9*2) + ($n8*3) + ($n7*4) + ($n6*5) + ($n5*6) + ($n4*7) + ($n3*8) + ($n2*9) + ($n1*10);
        $d1    = $eleven - ($restDivision->rest($sumD1, $eleven));

        if($d1 >= 10){
            $d1 = 0;
        }

        $sumD2 = ($d1*2) + ($n9*3) + ($n8*4) + ($n7*5) + ($n6*6) + ($n5*7) + ($n4*8) + ($n3*9) + ($n2*10) + ($n1*11);
        $d2    = $eleven - ($restDivision->rest($sumD2, $eleven));
        
        if($d2 >= 10){
            $d2 = 0;
        }
        
        $cpf = $n1.$n2.$n3.'.'.$n4.$n5.$n6.'.'.$n7.$n8.$n9.'.'.$d1.$d2;

        return $cpf;
    }
}