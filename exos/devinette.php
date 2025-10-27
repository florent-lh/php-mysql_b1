<?php
//on démarre la session : 
session_start();


//variable d'affichage : 
$affichage = "";
$gameOver = false;

//tester le bouton submit : 
if ($_SERVER['REQUEST_METHOD'] === "POST") {
      echo '<pre>';
      var_dump($_POST);
      echo '</pre>';


      //stockage de la valeur aléatoire :; 
      if (!isset($_SESSION['nombreMystere'])) {

            $_SESSION['nombreMystere'] = mt_rand(1, 100);
            $_SESSION['nbEssais'] = 4;
      }
      if (((filter_var($_POST['proposition'], FILTER_VALIDATE_INT) === false) || empty($_POST['proposition'])) && $_SESSION['nbEssais'] > 0) {
            $affichage .= "<p class='text-center text-red-500'>Veuillez entrer un nombre entier valide.</p>";
            $_SESSION['nbEssais']--;
            $affichage .= "<p class='text-center'>Il vous reste " . ($_SESSION['nbEssais'] + 1) . " essai" . ($_SESSION['nbEssais'] > 1 ? "s" : "") . ".</p>";
      } else if ($_POST['proposition'] > $_SESSION['nombreMystere'] && $_SESSION['nbEssais'] > 0) {
            $affichage .= "<p class='text-center text-red-500'>C'est moins !</p>";

            $_SESSION['nbEssais']--;
            $affichage .= "<p class='text-center'>Il vous reste " . ($_SESSION['nbEssais'] + 1) . " essai" . ($_SESSION['nbEssais'] > 1 ? "s" : "") . ".</p>";
      } else if ($_POST['proposition'] < $_SESSION['nombreMystere'] && $_SESSION['nbEssais'] > 0) {
            $affichage .= "<p class='text-center text-red-500'>C'est plus !</p>";

            $_SESSION['nbEssais']--;
            $affichage .= "<p class='text-center'>Il vous reste " . ($_SESSION['nbEssais'] + 1) . " essai" . ($_SESSION['nbEssais'] > 1 ? "s" : "") . ".</p>";
      } else if ($_SESSION['nbEssais'] < 1) {
            $affichage .= "<p class='text-center text-red-500'>Désolé, vous avez épuisé vos 5 essais. Le nombre mystère était " . $_SESSION['nombreMystere'] . ".</p>";
            unset($_SESSION['nombreMystere']);
            unset($_SESSION['nbEssais']);
            $affichage .= "<p class='text-center'><a href='" . $_SERVER['PHP_SELF'] . "' class='text-blue-500 underline'>Rejouer</a></p>";
            $gameOver = true;
      } else {
            $affichage .= "<p class='text-center text-green-500'>Bravo ! Vous avez trouvé le nombre mystère.</p>";
            unset($_SESSION['nombreMystere']);
            unset($_SESSION['nbEssais']);
            $affichage .= "<p class='text-center'><a href='" . $_SERVER['PHP_SELF'] . "' class='text-blue-500 underline'>Rejouer</a></p>";
            $gameOver = true;
      }

      echo $_POST['proposition'];
      echo '<pre>';
      print_r($_SESSION);
      echo '</pre>';
}


?>

<!DOCTYPE html>
<html lang="fr">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Jeu devinette</title>
      <style>

      </style>
</head>

<body>
      <div class="w-3/4 mx-auto mt-10 p-6 bg-gray-100 rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold text-center">Jeu devinette</h2>
            <h3 class="text-base text-center">Trouver un nombre entre 1 & 100 (inclus)</h3>
            <h4 class="text-base text-center">Vous avez 5 chances</h4>

            <p class="text-sm  text-center">Entrer votre proposition :</p>
            <p><?= $affichage ?></p>
            <?php if (!$gameOver): ?>
                  <form name="" action="<?= $_SERVER['PHP_SELF'] ?>" method="post" class="w-1/2 text-center mx-auto mt-4 flex gap-4 flex-col justify-center items-center">
                        <input type="text" name="proposition" value="" id="proposition">
                        <input type="submit" value="J'essaye !" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 cursor-pointer">
                  </form>
            <?php endif; ?>
      </div>
      <script src="https://cdn.tailwindcss.com/3.4.16"></script>
</body>

</html>