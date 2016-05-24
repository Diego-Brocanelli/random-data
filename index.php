<?php

require_once __DIR__.'/vendor/autoload.php';

use CPF\CPF;

$cpf = new CPF();
echo $cpf->generate();