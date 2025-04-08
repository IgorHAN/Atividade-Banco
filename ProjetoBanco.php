<?php
echo "Insira seu nome:";
$titular = readline();

$saldo = 1000;

echo "================= \n Titular: $titular \n Saldo Atual: R$ $saldo \n================= \n";

do {

    echo " 1. Consultar Saldo\n";

    echo " 2. Sacar valor\n";

    echo " 3. Depositar valor\n";

    echo " 4. Sair\n";

    $escolha = (int) fgets(STDIN);

    switch ($escolha) {
        case 1:
            $escolha = 1;
            echo "Seu saldo é: $saldo \n";
            "\n";
            break;

        case 2:
            $escolha = 2;
            echo "Quanto deseja sacar: \n";
            $saque = readline();
            $saldo = $saldo - $saque;
            if ($saque > $saldo) {
                echo "Saldo insuficiente \n";
            }
            break;

        case 3:
            $escolha = 3;
            echo "Quanto deseja depositar: \n";
            $deposito = readline();
            if ($deposito > 0) {
                $saldo = $deposito + $saldo;
            } else {
                echo "Insira um numero valido \n";
            }

            break;

        case 4:
            echo "Encerrando Progama...";
            break;

        default:
            echo "Opção inválida \n";
            break;
    }
} while ($escolha != 4);
