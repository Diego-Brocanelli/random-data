# Random Data 
Focado em fornecer dados válidos aleatórios para uso em ambiente de homologação/Testes.

[![Codacy Badge](https://api.codacy.com/project/badge/Grade/2049798bf7324d2797a9f3b1927a1158)](https://www.codacy.com/app/Diego-Brocanelli/randomData?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=Diego-Brocanelli/randomData&amp;utm_campaign=Badge_Grade)
[![Code Climate](https://codeclimate.com/github/Diego-Brocanelli/randomData/badges/gpa.svg)](https://codeclimate.com/github/Diego-Brocanelli/randomData)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/398667a1-51b0-42e2-92b5-5de351897851/small.png)](https://insight.sensiolabs.com/projects/398667a1-51b0-42e2-92b5-5de351897851)

## Requisitos

PHP >= 7.4;

## Instalar

```
composer install
```

## Executar testes

Na raiz do projeto.

```
composer tests
```

## Executar code analysis

Na raiz do projeto.

```
composer analyse
```

## Executar PHP Code Sniffer

Na raiz do projeto.

```
composer phpcs
```

## Executar testes, análise de código e PHP Code Sniffer

Na raiz do projeto.

```
composer all
```

## Como usar o componente

```
composer require diego-brocanelli/money_to_word dev-main
```

## Examplos:

### CPF

#### Gerar

```php
<?php

require_once __DIR__.'/vendor/autoload.php';

use Random\CPF;

$cpf = new CPF();
echo $cpf->generate(); // output: '64893836757'
```
#### Validar

```php
<?php

require_once __DIR__.'/vendor/autoload.php';

use Random\Validate\CPF;

$validateCPF = new CPF();
$validateCPF->isValid('64893836757') ; //output: true
```

### CNPJ

#### Gerar

```php
<?php

require_once __DIR__.'/vendor/autoload.php';

use Random\CNPJ;

$cnpj = new CNPJ();
echo $cnpj->generate(); // output: '77496644000147'
```

#### Validar

```php
<?php

require_once __DIR__.'/vendor/autoload.php';

use Random\Validate\CNPJ;

$ValidateCNPJ = new CNPJ();
$ValidateCNPJ->isValid('77496644000147'); //output: true
```
## Autor

<a href="https://www.diegobrocanelli.com.br/">
<img src="https://avatars2.githubusercontent.com/u/4108889?s=460&v=4" width="150px">
</a>

### License
[MIT](LICENSE)
