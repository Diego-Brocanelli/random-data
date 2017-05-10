# Random Data 

[![Codacy Badge](https://api.codacy.com/project/badge/Grade/2049798bf7324d2797a9f3b1927a1158)](https://www.codacy.com/app/Diego-Brocanelli/randomData?utm_source=github.com&utm_medium=referral&utm_content=Diego-Brocanelli/randomData&utm_campaign=badger)

Focado em fornecer dados válidos aleatórios para uso em ambiente de homologação/Testes.

[![Codacy Badge](https://api.codacy.com/project/badge/Grade/2049798bf7324d2797a9f3b1927a1158)](https://www.codacy.com/app/Diego-Brocanelli/randomData?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=Diego-Brocanelli/randomData&amp;utm_campaign=Badge_Grade)

# Como usar
#### Instalação do pacote.
Pela linha de comando no diretório raiz do projeto.
```
composer require diego-brocanelli/random-data dev-master
```
Por meio do composer.json
```
{
    "require": {
        "diego-brocanelli/random-data": "dev-master"
    }
}
```

### Gerador de CPF
```
<?php

require_once __DIR__.'/vendor/autoload.php';

use Random\Generate\CPF\CPF;

$cpf    = new CPF();
echo $cpf->generate();
```

### Gerador de CNPJ
```
<?php

require_once __DIR__.'/vendor/autoload.php';

use Random\Generate\CNPJ\CNPJ;

$cnpj = new CNPJ();
echo $cnpj->generate();
```

### Validar CPF
```
<?php

require_once __DIR__.'/vendor/autoload.php';

use Random\Validate\CPF\CPF as ValidateCPF;

$validateCPF = new ValidateCPF();
var_dump( $validateCPF->isValid('64893836757') );

//output: true
```

### Validar CNPJ
```
<?php

require_once __DIR__.'/vendor/autoload.php';

use Random\Validate\CNPJ\CNPJ as ValidateCNPJ;

$ValidateCNPJ = new ValidateCNPJ();
var_dump( $ValidateCNPJ->isValid('77496644000147') );

//output: true
```

# To-do list

* [X] CPF Generator
* [X] CPF Validator
* [X] CNPJ Generator
* [X] CNPJ Validator
* [ ] User data
* [X] Include in  [packagist](https://packagist.org/)
