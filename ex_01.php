<?php
function rev_epur_str($chaine) {
    if (!isset($chaine) || !is_string($chaine)) {
        return false;
    }

    $chaine = trim($chaine);
    $chaine = preg_replace('/\s+/', ' ', $chaine);
    $mots = explode(' ', $chaine);
    $mots = array_reverse($mots);
    return implode(' ', $mots);
}
?>

