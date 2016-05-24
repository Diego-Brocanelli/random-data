# Random Data 
Focado em fornecer dados válidos aleatórios para uso em ambiente de homologação/Testes.

# Como usar
Instalação do pacote.
```
composer install
```

### Gerador de CPF
```
<?php

require_once __DIR__.'/vendor/autoload.php';

use Random\Generate\CPF\CPF;

$cpf    = new CPF();
$result = $cpf->generate();
```

# To-do list

* [X]  CPF Generator
* [ ]  CPF Validator
* [ ] CNPJ Generator
* [ ] CNPJ Validator

