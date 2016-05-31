<?php

namespace Random\Generate\CNPJ;

use Random\Generate\AbstractGenerator;

class CNPJ extends AbstractGenerator
{
    public function generate()
    {
        $n1 = $this->randomNumber();
        $n2 = $this->randomNumber();
        $n3 = $this->randomNumber();
        $n4 = $this->randomNumber();
        $n5 = $this->randomNumber();
        $n6 = $this->randomNumber();
        $n7 = $this->randomNumber();
        $n8 = $this->randomNumber();
        $n9 = 0;
        $n10= 0;
        $n11= 0;
        $n12= 1;

        $sumD1 = ($n12*2)+($n11*3)+($n10*4)+($n9*5)+($n8*6)+($n7*7)+($n6*8)+($n5*9)+($n4*2)+($n3*3)+($n2*4)+($n1*5);
        $d1    = 11 - ( $this->mod( $sumD1, 11 ) );

        if ( $d1 >= 10 )
        { 
            $d1 = 0 ;
        }
        
        $sumD2 = ($d1*2)+($n12*3)+($n11*4)+($n10*5)+($n9*6)+($n8*7)+($n7*8)+($n6*9)+($n5*2)+($n4*3)+($n3*4)+($n2*5)+($n1*6);
        $d2    = 11 - ( $this->mod( $sumD2, 11) );
        
        if ($d2 >= 10) { 
            $d2 = 0;
        }
        
        $retorno = $n1.$n2.$n3.$n4.$n5.$n6.$n7.$n8.$n9.$n10.$n11.$n12.$d1.$d2;

        return $retorno;
    }
}