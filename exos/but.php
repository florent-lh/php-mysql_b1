<?php
$dureeMatch = 45;
$nbBut = 0;
$affichage = "";

while ($dureeMatch >= 0) {
      if ($dureeMatch === 11 || $dureeMatch === 23) {
            $affichage .= '<li>But marqué à la ' . $dureeMatch . 'min du match</li>';
            $nbBut++; //$nbBut = $nbBut + 1
      }
      $dureeMatch--;
}

echo "<p>Il y a $nbBut buts marqués durant la première mi-temps. Résumé : </p><ul>$affichage</ul>";
