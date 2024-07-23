<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Problema 01</title>
</head>
<body>
    <h2>Soma Pares</h2>

    <?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $numerosString = $_POST["numeros"];

        // Converte a string 
        $numeros = explode(",", $numerosString);

        
        $soma = 0;

        // Função verificar par 
        foreach ($numeros as $numeroString) {
            
            $numero = intval(trim($numeroString));
            if ($numero % 2 == 0) {
                $soma += $numero;
            }
        }

        echo "<h3>Resultado</h3>";
        
        echo "<p>Soma dos números pares: " . $soma . "</p>";
    }
    ?>

    <!-- Formulário para inserir os números do array -->
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="numeros">Insira os números do array (separados por vírgula):</label><br>
        <textarea id="numeros" name="numeros" rows="4" cols="50"><?php if(isset($numerosString)) echo htmlspecialchars($numerosString); ?></textarea><br><br>
        <input type="submit" value="Calcular Soma de Pares">
    </form>
</body>
</html>
