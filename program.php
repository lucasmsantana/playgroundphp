<?php
require 'Conta.php';

$contaUm = new Conta('Lucas', '061.725.222-11', 0);
$contaDois = new Conta ('Olavo', '261.665.191-12', 1000);
$contaTres = new Conta ('Emily', '765.222.111-13', 500);

$contaUm ->Depositar(1000);
$contaDois ->Depositar(1000);
$contaTres ->Depositar(1000);

$contaUm->Sacar(250);
$contaDois->Sacar(250);
$contaTres->Sacar(250);

$contaTres->Transferir(100, $contaUm);
$contaUm->Transferir(150, $contaDois);
$contaDois->Transferir(100,$contaTres);

echo "Saldo Lucas: $contaUm->saldo" . PHP_EOL;
echo "Saldo Olavo: $contaDois->saldo" . PHP_EOL;
echo "Saldo Emily: $contaTres->saldo" . PHP_EOL;




