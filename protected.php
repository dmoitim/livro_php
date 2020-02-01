<?php

class Pessoa {

    protected $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }

}

class Funcionario extends Pessoa {

    private $cargo;
    private $salario;

    public function contrata($cargo, $salario) {
        if (is_numeric($salario) AND $salario > 0) {
            $this->cargo = $cargo;
            $this->salario = $salario;
        }
    }

    public function getInfo() {
        print "Nome: {$this->nome}, salário: {$this->salario}";
    }

}

$func = new Funcionario("Devair Luiz Moitim");
$func->contrata("Analista de Sistemas", 1000);
print "{$func->getInfo()}";
