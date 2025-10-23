<h3>Coucou c'est la page 1</h3>
<a href="index.php">Retour vers la page d'accueil</a>

<?php
echo '<pre>';
print_r($_GET);
echo '</pre>';

//on vérifie que tous les paramètres attendus sont présents dans l'URL
if (isset($_GET['article']) && isset($_GET['prix']) && isset($_GET['modele']) && isset($_GET['couleur'])) {
      echo "<p>Vous venez de séléctionner l'article : <strong>" . $_GET['article'] . "</strong></p>";
      echo "<p>Il s'agit de : </p>";
      echo '<ul>
        <li>Modèle : ' . $_GET['modele'] . '</li>
        <li>Couleur : ' . $_GET['couleur'] . '</li>
        <li>Prix : ' . $_GET['prix'] . ' €</li>
      </ul>';
} else {
      //redirection vers la page d'accueil avec un message d'erreur
      header('Location: index.php?error=missing_parameters');

      exit; //on stoppe l'exécution du script après la redirection
}
