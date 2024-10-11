<?php
function pertenceFibonacci($num) {
    // Inicializando os dois primeiros números da sequência
    $a = 0;
    $b = 1;
    
    // Calculando a sequência até que o número seja igual ou maior ao informado
    while ($a <= $num) {
        if ($a == $num) {
            return true;
        }
        $temp = $a + $b;
        $a = $b;
        $b = $temp;
    }
    
    return false;
}

// Número a ser verificado
$numero = 21; // Você pode alterar esse valor

// Verificando se o número pertence à sequência de Fibonacci
if (pertenceFibonacci($numero)) {
    echo "O número $numero pertence à sequência de Fibonacci.";
} else {
    echo "O número $numero NÃO pertence à sequência de Fibonacci.";
}
?>