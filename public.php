<?php

class Pessoa {

    public $nome;
    public $endereco;
    public $nascimento;

}

$p1 = new Pessoa;
$p1->nome = "Devair Luiz Moitim";
$p1->endereco = "São José do Rio Preto - SP";
$p1->nascimento = "20 de julho de 1984";
$p1->telefone = "(17) 1234-5678"; // atributo definido em tempo de execução

print_r($p1);
