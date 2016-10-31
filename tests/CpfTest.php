<?php

namespace PronerTest;

use Proner\Cpf;

class CpfTest extends \PHPUnit_Framework_TestCase
{
    public function cpfs_validate()
    {
        return [
            ['393.422.225-01', true],
            ['017.935.986-06', true],
            ['401.653.463-10', true],
            ['393.422.225;01', true],
            ['017.935.986.06', true],
            ['401.653.463/10', true],
            ['392.422.225-01', false],
            ['018.935.986-06', false],
            ['405.653.463-10', false],
            ['392.422.225;01', false],
            ['392.422.225;01', false],
            ['018.935.986.06', false],
            ['405.653.463/10', false],
        ];
    }

    public function cpfs_registros()
    {
        return [
            ['393.422.225-01', 'Bahia e Sergipe'],
            ['017.935.986-06', 'Minas Gerais'],
            ['401.653.463-10', 'Ceará, Maranhão e Piauí'],
            ['393.422.225;01', 'Bahia e Sergipe'],
            ['017.935.986.06', 'Minas Gerais'],
            ['401.653.463/10', 'Ceará, Maranhão e Piauí'],
        ];
    }

    /**
     * @dataProvider cpfs_validate
     */
    public function test_validate($cpf, $expected)
    {
        $this->assertEquals($expected,Cpf::validate($cpf));
    }


    /**
     * @dataProvider cpfs_registros
     */
    public function test_registro($cpf, $expected)
    {
        $this->assertEquals($expected,Cpf::getUfRegister($cpf));
    }
}