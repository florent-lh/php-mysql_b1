<!DOCTYPE html>
<html lang="fr">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Arbre de Noël</title>
      <style>
            /* Centrer tout le contenu */
            body {
                  /*ça, c'est de la 💩 */
                  text-align: center;
                  background: black;

            }
      </style>
</head>

<body>
      <?php

      $hauteur = 22;
      for ($i = 0; $i < 21; $i++) {
            // Espaces avant les étoiles
            for ($j = $hauteur - $i; $j--;) {
                  echo "";
            }
            // Étoile jaune au sommet
            if ($i == 0) {
                  echo "<span style='color: yellow;'>★</span><br>";
                  continue;
            }
            // Bordures jaunes
            echo "<span style='color: yellow;'>★</span>";
            // Étoiles vertes pour la couronne
            for ($k = 0; $k < (1 * $i - 0); $k++) {
                  echo "<span style='color: green;'>★</span>";
            }
            // Bordures jaunes
            if ($i > 0) {
                  echo "<span style='color: yellow;'>★</span>";
            }
            echo "<br>";
      }
      // T étoiles rouges
      for ($i = 0; $i < 6; $i++) {
            for ($j = 0; $j < 3; $j++) {
                  echo "";
            }
            echo "<span style='color: red;'>★★★★★★★★★★</span><br>";
      }
      ?>


</body>

</html>