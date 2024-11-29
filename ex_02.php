<?php

function min_len_array($array) {

    if (empty($array)) {
        return false;
    }

    // Variables pour stocker la clé et la valeur de taille minimale
    $minKeyLength = PHP_INT_MAX; // Initialisation avec un grand nombre
    $minValueLength = PHP_INT_MAX;
    $result = null;

    // Parcourir le tableau pour trouver les longueurs minimales
    foreach ($array as $key => $value) {
        $keyLength = strlen($key); // Longueur de la clé
        $valueLength = strlen($value); // Longueur de la valeur

        
        if ($keyLength < $minKeyLength || ($keyLength == $minKeyLength && $valueLength < $minValueLength)) {
            $minKeyLength = $keyLength;
            $minValueLength = $valueLength; 
            $result = $value; 
        }
    }

    // Retourner la valeur trouvée
    return $result;
}

// Exemple d'utilisation
$array = [
    "longueur" => "mot1",
    "cl" => "test",
    "a" => "mot",
    "bc" => "voiture"
];

$result = min_len_array($array);

if ($result !== false) {
    echo "La valeur correspondant à la clé la plus courte est : $result\n";
} else {
    echo "Le tableau est vide.\n";
}
?>
