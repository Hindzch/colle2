<?php
function rev_epur_str($str) {
    // Vrf si la chaîne est valide
    if (!isset($str) || !is_string($str)) {
        return false;
    }


    $cleaned = preg_replace('/\s+/', ' ', trim($str));


    $words = explode(' ', $cleaned);


    $reversed = array_reverse($words);

    // Rejoint les mots dans une chaîne avec un espace
    return implode(' ', $reversed);
}

// exp
$input = "   Bonjour    le   monde\t!";
$result = rev_epur_str($input);
if ($result !== false) {
    echo $result; // Affiche : "monde le Bonjour"
} else {
    echo "La chaîne est invalide.";
}
?>

