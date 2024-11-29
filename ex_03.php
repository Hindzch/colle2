<?php
function resum_join_str($chaine1, $chaine2) {
    if (!isset($chaine1) || !isset($chaine2)) {
        return false; // Retourne FALSE si une des chaînes est manquante
    }

    $premierePartie = substr($chaine1, 0, 14);
    $deuxiemePartie = substr($chaine2, -3);

    // Compléter avec des points si les chaînes sont trop courtes
    while (strlen($premierePartie) < 14) {
        $premierePartie .= '.';
    }

    while (strlen($deuxiemePartie) < 3) {
        $deuxiemePartie = '.' . $deuxiemePartie;
    }

    return $premierePartie . $deuxiemePartie;
}
?>


