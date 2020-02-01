<?php

class Pessoa {

    private $nome;
    private $endereco;
    private $nascimento;

    public function __construct($nome, $endereco) {
        $this->nome = $nome;
        $this->endereco = $endereco;
    }

    public function setNascimento($nascimento) {
        $partes = explode("-", $nascimento);
        if (count($partes) === 3) {
            if (checkdate($partes[1], $partes[2], $partes[0])) {
                $this->nascimento = $nascimento;
                return true;
            }
            return false;
        }
        return false;
    }

}

$p1 = new Pessoa("Devair Luiz Moitim", "São José do Rio Preto - SP");

if ($p1->setNascimento("20 de julho de 1984")) {
    print "Atribuiu 20 de julho de 1984";
} else {
    print "Não atribuiu 20 de julho de 1984";
}

if ($p1->setNascimento("1984-07-20")) {
    print "Atribuiu 1984-07-20";
} else {
    print "Não atribuiu 1984-07-20";
}