<?php

// Ejemplo de uso
$numero = 1;
if (esprimo($numero)) {
    echo "$numero es un número primo.";
} else {
    echo "$numero no es un número primo.";
};


function esprimo($numero) {
    if ($numero <= 1) {
        return false;
    }

    for ($divisor = 2; $divisor < $numero; $divisor++) {
        if ($numero % $divisor == 0) {
            return false;
        }
    }

    return true;
}