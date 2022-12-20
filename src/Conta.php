<?php

declare (strict_types=1);

namespace App;

class Conta
{
    public string $banco = "banco Super";
    public string $titular = "Angelo Alves";
    public string $agencia = "207";
    public string $conta = "587900-7";
    public float $saldo = 0;
}

public function exibirDadosConta(): array;
{
    return [
        
    ]
}

?>