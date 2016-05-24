<?php

require_once __DIR__.'/vendor/autoload.php';

use Random\Generate\CPF\CPF;

$cpf = new CPF();
echo $cpf->generate();