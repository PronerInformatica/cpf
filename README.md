# CPF
Classe para trabalhar com CPF

## Exemplo
```php
<?php
require_once "UploadImagem.class.php";

//EXEMPLO

var_dump(CPF::validate('022.823.470.05')); //RETORNA UM TRUE OU FALSE

var_dump(CPF::getUfRegister('022.823.470.05')); //RETORNA O ESTADO A ONDE FOI REGISTRADO O CPF
?>