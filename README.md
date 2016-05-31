# Random Data 
Focado em fornecer dados válidos aleatórios para uso em ambiente de homologação/Testes.

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

# To-do list

* [X] CPF Generator
* [ ] CPF Validator
* [X] CNPJ Generator
* [ ] CNPJ Validator
* [ ] User data
* [X] Include in  [packagist](https://packagist.org/)