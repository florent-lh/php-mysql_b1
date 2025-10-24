<?php
// echo '<pre>';
// print_r($_SERVER);
// echo '</pre>';

//variable d'affichage
$content = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      echo '<pre>';
      print_r($_POST);
      echo '</pre>';
      extract($_POST);


      //htmlspecialchars + trim : supprimer les espaces avant et après + sécuriser les données
      $nom = htmlspecialchars(trim($nom));
      $prenom = htmlspecialchars(trim($prenom));
      $age = htmlspecialchars(trim($age));
      $email = htmlspecialchars(trim($email));
      $password = htmlspecialchars(trim($password));

      //vérification si les champs sont bien remplis :
      //nom et prénom : vérifier la longueur : entre 2 et 50 caractères
      /*
            si le nom est inférieur à 2 ou supérieur à 50
                  message d'erreur : veuillez entrer votre nom
      */
      //SI la valeur du champ nom renseignée par l'utilisateur est inférieure à 2 OU supérieure à 50
      if (iconv_strlen($nom) < 2 || iconv_strlen($nom) > 50) {
            $errorMessages['nom'] = 'Veuillez entrer votre nom.';
      }
      if (iconv_strlen($prenom) < 2 || iconv_strlen($prenom) > 50) {
            $errorMessages['prenom'] = 'Veuillez entrer votre prénom.';
      }
      if (empty($age)) {
            $errorMessages['age'] = 'Veuillez entrer votre âge.';
      }
      if (!empty($email)) {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $errorMessages['email'] = 'Veuillez entrer un email valide.';
            }
      } else {
            $errorMessages['email'] = 'Veuillez entrer votre email.';
      }
      if (empty($password)) {
            //utiliser un preg_match : 1 caractère spécial, 1 majuscule, 1 minuscule, 1 chiffre, au moins 8 caractères
            $errorMessages['password'] = 'Veuillez entrer votre mot de passe.';
      }

      //si le tableau d'erreurs est vide, le formulaire est valide
      if (empty($errorMessages)) {
            header('Location: page2.php');
            exit;
            // unset($_POST); //vider le formulaire
            // $content = '<div class="max-w-md mx-auto mt-10 p-6 bg-green-100 text-green-800 rounded-lg shadow-md">';
            // $content .= 'Formulaire validé avec succès !';
            // $content .= '</div>';
      }
}


?>

<!DOCTYPE html>
<html lang="fr">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <!-- content delivery network -->
</head>

<body>
      <h1 class="text-3xl text-center">$_POST : superglobale pour les formulaires</h1>
      <?= $content;  ?>
      <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" class="mx-auto max-w-md mt-10 p-6 rounded-lg shadow-md">
            <div class="flex flex-col">
                  <label for="nom" class="block text-gray-700 font-bold mb-2">Nom :</label>
                  <input type="text" id="nom" name="nom" class="w-full px-3 py-2 border rounded-lg mb-4" value="<?= $_POST['nom'] ?? null; ?>">
                  <span class="text-sm text-red-500 mb-4"><?= $errorMessages['nom'] ?? null; ?></span>

                  <label for="prenom" class="block text-gray-700 font-bold mb-2">Prénom :</label>
                  <input type="text" id="prenom" name="prenom" class="w-full px-3 py-2 border rounded-lg mb-4" value="<?= $_POST['prenom'] ?? null; ?>">
                  <span class="text-sm text-red-500 mb-4"><?= $errorMessages['prenom'] ?? null; ?></span>

                  <label for="age" class="block text-gray-700 font-bold mb-2">Âge :</label>
                  <input type="number" id="age" name="age" class="w-full px-3 py-2 border rounded-lg mb-4" value="<?= $_POST['age'] ?? null; ?>">
                  <span class="text-sm text-red-500 mb-4"><?= $errorMessages['age'] ?? null; ?></span>

                  <label for="email" class="block text-gray-700 font-bold mb-2">Email :</label>
                  <input type="text" id="email" name="email" class="w-full px-3 py-2 border rounded-lg mb-4" value="<?= $_POST['email'] ?? null; ?>">
                  <span class="text-sm text-red-500 mb-4"><?= $errorMessages['email'] ?? null; ?></span>

                  <label for="password" class="block text-gray-700 font-bold mb-2">Mot de passe :</label>
                  <input type="password" id="password" name="password" class="w-full px-3 py-2 border rounded-lg mb-4" value="<?= $_POST['password'] ?? null; ?>">
                  <span class="text-sm text-red-500 mb-4"><?= $errorMessages['password'] ?? null; ?></span>

                  <input type="submit" value="Envoyer" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 cursor-pointer">
            </div>
      </form>
      <script src="https://cdn.tailwindcss.com/3.4.16"></script>
</body>

</html>