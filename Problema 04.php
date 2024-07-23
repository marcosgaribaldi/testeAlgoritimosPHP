<?php

function numerosPrimos($valor) {
    
    $numeros = array_fill(2, $valor - 1, false);

    for ($i = 2; $i * $i <= $valor; $i++) {
        if (!$numeros[$i]) {
            for ($j = $i * $i; $j <= $valor; $j += $i) {
                $numeros[$j] = true;
            }
        }
    }
    // array de números primos
    $primos = [];
    for ($i = 2; $i <= $valor; $i++) {
        if (!$numeros[$i]) {
            $primos[] = $i;
        }
    }
    return $primos;
}

// Exemplo de uso:
$valor = 13;
$primos = numerosPrimos($valor);

echo "Números primos do $valor: " . implode(", ", $primos) . "\n";
?>
