<?php

namespace Proner;

class Cpf
{
    private static function setCpf($cpf)
    {
        if( !empty($cpf) ){
            $cpf = preg_replace('/[^0-9]/', '', (string) $cpf);
            return $cpf;
        }
    }

    public static function getUfRegister($cpf)
    {
        if( !empty($cpf) ){
            $cpf = self::setCpf($cpf);
        }

        $nonoDigito = substr($cpf, 8, 1);
        switch($nonoDigito)
        {
            case 0: return "Rio Grande do Sul"; break;
            case 1: return "Distrito Federal, Goiás, Mato Grosso do Sul e Tocantins"; break;
            case 2: return "Pará, Amazonas, Acre, Amapá, Rondônia e Roraima"; break;
            case 3: return "Ceará, Maranhão e Piauí"; break;
            case 4: return "Pernambuco, Rio Grande do Norte, Paraíba e Alagoas"; break;
            case 5: return "Bahia e Sergipe"; break;
            case 6: return "Minas Gerais"; break;
            case 7: return "Rio de Janeiro e Espírito Santo"; break;
            case 8: return "São Paulo"; break;
            case 9: return "Paraná e Santa Catarina"; break;
        }
    }

    public static function validate($cpf) {

        if( !empty($cpf) ){
            $cpf = self::setCpf($cpf);
        }

        // Verifica se o numero de digitos informados é igual a 11
        if (strlen($cpf) != 11) {
            return false;
        }

        // Verifica se nenhuma das sequências invalidas abaixo
        // foi digitada. Caso afirmativo, retorna falso
        elseif($cpf == '00000000000' ||
            $cpf == '11111111111' ||
            $cpf == '22222222222' ||
            $cpf == '33333333333' ||
            $cpf == '44444444444' ||
            $cpf == '55555555555' ||
            $cpf == '66666666666' ||
            $cpf == '77777777777' ||
            $cpf == '88888888888' ||
            $cpf == '99999999999'){
            return false;
        }else{
            for ($t = 9; $t < 11; $t++) {
                for ($d = 0, $c = 0; $c < $t; $c++) {
                    $d += $cpf{$c} * (($t + 1) - $c);
                }
                $d = ((10 * $d) % 11) % 10;
                if ($cpf{$c} != $d) {
                    return false;
                }
            }
            return true;
        }
    }
}