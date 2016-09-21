<?php

namespace PronerTest;

use Proner\Cpf;

class CpfTest extends \PHPUnit_Framework_TestCase
{
    public function test_validate()
    {
        $this->assertEquals(true,Cpf::validate('393.422.225-01'));
        $this->assertEquals(true,Cpf::validate('017.935.986-06'));
        $this->assertEquals(true,Cpf::validate('401.653.463-10'));

        $this->assertEquals(false,Cpf::validate('392.422.225-01'));
        $this->assertEquals(false,Cpf::validate('018.935.986-06'));
        $this->assertEquals(false,Cpf::validate('405.653.463-10'));
    }

    public function test_registro()
    {
        $this->assertEquals('Rio Grande do Sul',Cpf::getUfRegister('018.935.980-06'));
    }
}