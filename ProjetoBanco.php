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
            echo "Seu saldo é: $saldo \n";
            echo "------------------------\n";
            break;

        case 2:
            echo "Quanto deseja sacar: \n";
            $saque = (float) readline();
            if ($saque > $saldo) {
                echo "Saldo insuficiente \n";
                echo "------------------------\n";
            } else{
                $saldo -= $saque;
                echo"Saque realizado com sucesso! \n";
                echo "------------------------\n";
            }
            break;

        case 3:
            echo "Quanto deseja depositar: \n";
            $deposito = (float) readline();
            if ($deposito > 0) {
                $saldo = $deposito + $saldo;
                echo "------------------------\n";
            } else {
                echo "Insira um numero valido \n";
                echo "------------------------\n";
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
