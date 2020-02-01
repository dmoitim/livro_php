<?php

require_once 'classes/Conta.php';
require_once 'classes/ContaPoupanca.php';
require_once 'classes/ContaCorrente.php';

// criação dos objetos
$contas = array();
$contas[] = new ContaCorrente(6677, "CC.1234.56", 100, 500);
$contas[] = new ContaPoupanca(6678, "CP.1234.57", 100);

// percorre contas
foreach ($contas as $key => $conta) {
    print "Conta: {$conta->getInfo()}<br>\n";
    print "Saldo atual: R$ {$conta->getSaldo()}<br>\n";
    $conta->depositar(200);
    print "Depósito de: R$ 200,00<br>\n";
    print "Saldo atual: R$ {$conta->getSaldo()}<br>\n";
    if ($conta->retirar(700)) {
        print "Retirada de: R$ 700,00<br>\n";
    } else {
        print "Retirada de: R$ 700,00 (não permitida)<br>\n";
    }
    print "Saldo atual: R$ {$conta->getSaldo()}<br>\n";
    print "<br>\n";
}