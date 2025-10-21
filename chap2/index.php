<!DOCTYPE html>
<html lang="fr">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <style>
            .carre {
                  height: 100px;
                  width: 100px;
            }

            .carreRouge {
                  background-color: red;
            }

            .carreVert {
                  background-color: green;
            }

            .carreJaune {
                  background-color: yellow;
            }

            .simpleCarre {
                  border: 2px solid black;
            }
      </style>
</head>

<body>
      <?php
      $var0 = 0;
      $var1 = 1;
      $rouge = "<div class='carre carreRouge simpleCarre'></div>";
      $vert = "<div class='carre carreVert simpleCarre'></div>";
      $jaune = "<div class='carre carreJaune simpleCarre'></div>";
      $simpleCarre = "<div class='carre simpleCarre'></div>";


      echo '<h2>Les structures conditionnelles</h2>';
      //isset() : teste si une variable est définie
      if (isset($var0)) {
            echo "<p>La variable var0 est définie</p>";
      } else {
            echo "<p>La variable var0 n'est pas définie</p>";
      }

      //empty() : teste si une variable est vide
      if (empty($var0)) {
            echo "<p>La variable var0 est vide</p>";
      } else {
            echo "<p>La variable var0 n'est pas vide</p>";
      }

      //opérateurs logiques
      //ET LOGIQUE : &&
      if (isset($rouge) && isset($jaune)) {
            echo $rouge . $jaune;
      } else {
            echo $simpleCarre;
      }

      //OU LOGIQUE : ||
      if (isset($vert) || isset($bleu)) {
            echo $vert;
      } else {
            echo $simpleCarre;
      }


      //opérateurs de comparaison
      /*
== égalité de valeur
=== égalité de valeur et de type
!= inégalité de valeur
<> inégalité de valeur
!== inégalité de valeur ou de type
< inférieur à
> supérieur à  
<= inférieur ou égal à 
>= supérieur ou égal à
*/
      $a = mt_rand(1, 99);
      $b = mt_rand(1, 99);
      if ($a > $b) {
            echo "<p>$a est supérieur à $b</p>";
      } else {
            echo "<p>$a est inférieur à $b</p>";
      }
      $salaire_corentin = mt_rand(1, 6000);
      if ($salaire_corentin < 1000) {
            echo "<p>Corentin est au SMIC avec $salaire_corentin €</p>";
      } elseif ($salaire_corentin >= 1000 && $salaire_corentin < 2500) {
            echo "<p>Corentin a un salaire moyen avec $salaire_corentin €</p>";
      } elseif ($salaire_corentin >= 2500 && $salaire_corentin < 4000) {
            echo "<p>Corentin a un bon salaire avec $salaire_corentin €</p>";
      } else {
            echo "<p>Corentin est riche avec $salaire_corentin €</p>";
      }


      //alternative
      $form = true;
      if (!$form): ?>
            <form>
                  <input type="text" name="nom" placeholder="Votre nom">
                  <input type="submit" value="Envoyer">
            </form>
      <?php else: ?>
            <p>Le formulaire est désactivé</p>
      <?php endif;

      //ternaire : 
      $verifJaune = (isset($jaune) ? $jaune : $simpleCarre);
      echo $verifJaune;

      $var = 1;
      $var2 = 0;
      //else if ternaire : 
      $reslt = ($var === 0) ? true : (($var2 === 0) ? true : false);

      //condition switch : 
      $couleur = "jaune";
      switch ($couleur) {
            case "rouge":
                  echo "<p>La couleur est rouge</p>";
                  break;
            case "vert":
                  echo "<p>La couleur est verte</p>";
                  break;
            case "bleu":
                  echo "<p>La couleur est bleue</p>";
                  break;
            default:
                  echo "<p>Couleur non reconnue</p>";
      }

      //exercice : convertissez l'exemple ci-dessus en condition if / else if / else 
      if ($couleur == 'rouge') {
            echo "<p>La couleur est rouge</p>";
      } elseif ($couleur == 'vert') {
            echo "<p>La couleur est verte</p>";
      } elseif ($couleur == 'bleu') {
            echo "<p>La couleur est bleue</p>";
      } else {
            echo "<p>Couleur non reconnue</p>";
      }







      ?>
</body>

</html>