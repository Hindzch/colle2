<?php
function min_len_array($tableau) {
    if (empty($tableau)) {
        return false; // Retourne FALSE si le tableau est vide
    }

    $cleMin = null;
    $valMin = null;

    foreach ($tableau as $cle => $valeur) {
        $tailleCle = strlen($cle);
        $tailleVal = strlen($valeur);

        if ($cleMin === null || $tailleCle < strlen($cleMin) || 
            ($tailleCle == strlen($cleMin) && $tailleVal < strlen($valMin))) {
            $cleMin = $cle;
            $valMin = $valeur;
        }
    }

    return $valMin;
}
?>

