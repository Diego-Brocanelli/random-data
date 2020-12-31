# Random Data 
Focado em fornecer dados válidos aleatórios para uso em ambiente de desenvolvimento ou homologação.

[![Codacy Badge](https://api.codacy.com/project/badge/Grade/2049798bf7324d2797a9f3b1927a1158)](https://www.codacy.com/app/Diego-Brocanelli/randomData?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=Diego-Brocanelli/randomData&amp;utm_campaign=Badge_Grade)
[![Code Climate](https://codeclimate.com/github/Diego-Brocanelli/randomData/badges/gpa.svg)](https://codeclimate.com/github/Diego-Brocanelli/randomData)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/398667a1-51b0-42e2-92b5-5de351897851/small.png)](https://insight.sensiolabs.com/projects/398667a1-51b0-42e2-92b5-5de351897851)

## Requisitos

PHP >= 7.4;

## Instalação

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

use Random\Faker;

echo (new Faker())->cpf()->generate(); // output: '64893836757'
```

#### Gerar com mascara

```php
<?php

require_once __DIR__.'/vendor/autoload.php';

use Random\Faker;

echo (new Faker())->cpf()->generateWithMask(); // output: '648.938.367-57'
```

#### Validar

```php
<?php

require_once __DIR__.'/vendor/autoload.php';

use Random\Faker;

(new Faker())->cpf()->isValid('56359989093') ; //output: true

// ou

(new Faker())->cpf()->isValid('563.599.890-93') ; //output: true
```


### CNPJ

#### Gerar

```php
<?php

require_once __DIR__.'/vendor/autoload.php';

use Random\Faker;

echo (new Faker())->cnpj()->generate(); // output: '77496644000147'
```

#### Gerar com mascara

```php
<?php

require_once __DIR__.'/vendor/autoload.php';

use Random\CNPJ;

echo (new Faker())->cnpj()->generateWithMask(); // output: '99.177.535/0001-08'
```

#### Validar

```php
<?php

require_once __DIR__.'/vendor/autoload.php';

use Random\Faker;

(new Faker())->cnpj()->isValid('99177535000108'); //output: true

// ou

(new Faker())->cnpj()->isValid('99.177.535/0001-08'); //output: true
```

## Autor

<a href="https://www.diegobrocanelli.com.br/">
<img src="https://avatars2.githubusercontent.com/u/4108889?s=460&v=4" width="150px">
</a>

### License
[MIT](LICENSE)
