<?php

function saoAnagramas($str1, $str2) {
    // Remover espaços em branco e converter para letras minúsculas
    $str1 = strtolower(str_replace(' ', '', $str1));
    $str2 = strtolower(str_replace(' ', '', $str2));

    // Verificar se as strings têm o mesmo comprimento
    if (strlen($str1) != strlen($str2)) {
        return false;
    }

    // Contar a ocorrência de cada caractere nas duas strings
    $charCount1 = [];
    $charCount2 = [];

    $len = strlen($str1);
    for ($i = 0; $i < $len; $i++) {
        $char1 = $str1[$i];
        $char2 = $str2[$i];
        
        // Incrementar o contador para o caractere na primeira string
        if (isset($charCount1[$char1])) {
            $charCount1[$char1]++;
        } else {
            $charCount1[$char1] = 1;
        }

        // Incrementar o contador para o caractere na segunda string
        if (isset($charCount2[$char2])) {
            $charCount2[$char2]++;
        } else {
            $charCount2[$char2] = 1;
        }
    }

    // Comparar os contadores de caracteres das duas strings
    return $charCount1 == $charCount2;
}

// Exemplos de uso:
$str1 = "amor";
$str2 = "roma";
if (saoAnagramas($str1, $str2)) {
    echo "'$str1' e '$str2' são anagramas.";
} else {
    echo "'$str1' e '$str2' não são anagramas.";
}
echo "<br>";

$str3 = "Casa";
$str4 = "Apartamento";
if (saoAnagramas($str3, $str4)) {
    echo "'$str3' e '$str4' são anagramas.";
} else {
    echo "'$str3' e '$str4' não são anagramas.";
}
?>
