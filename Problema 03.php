<?php

function fatorial($numero) {

    if ($numero == 0) {
        return 1;
    }
    
    // Caso recursivo: n * fatorial(n-1)
    return $numero * fatorial($numero - 1);
}

// Exemplos de uso:
$num1 = 6;


echo "Fatorial de $num1 é " . fatorial($num1) . "\n"; 
echo "<br>";	

?>
