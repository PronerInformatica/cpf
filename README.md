# CPF
Classe para trabalhar com CPF

## Exemplo
```php
<?php

//EXEMPLO
require_once "../vendor/autoload.php";

use Proner\Cpf;

var_dump(CPF::validate('999.999.999.99')); //RETORNA UM TRUE OU FALSE

var_dump(CPF::getUfRegister('999.999.999.99')); //RETORNA O ESTADO A ONDE FOI REGISTRADO O CPF
?>
