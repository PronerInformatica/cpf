# CPF
Classe para trabalhar com CPF

## Exemplo
```php
<?php
require_once "Cpf.php";

//EXEMPLO

var_dump(CPF::validate('999.999.999.99')); //RETORNA UM TRUE OU FALSE

var_dump(CPF::getUfRegister('999.999.999.99')); //RETORNA O ESTADO A ONDE FOI REGISTRADO O CPF
?>
