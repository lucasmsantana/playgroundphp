<?php
class Conta
{

    public string $titular;
    public string $cpf;
    public float $saldo = 0;

    public function Sacar(float $valorASacar): void
    {

        if ($valorASacar > $this->saldo) {
            echo "Saldo Indisponível.";
            return;
        }

        $this->saldo -= $valorASacar;
    }

    public function Depositar(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "Valor deve ser positivo!";
            return;
        }

        $this->saldo += $valorADepositar;
    }

    public function Transferir(float $valorATransferir, Conta $contaDestino): void
    {
        if ($this->saldo < $valorATransferir) {
            echo 'Saldo insuficiente.';
        }

        $this->Sacar($valorATransferir);
        $contaDestino->Depositar($valorATransferir);
    }

    
}
