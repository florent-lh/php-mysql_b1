<?php
echo "<h2>Les fonctions prédéfinies</h2>";
//gettype() : retourne le type d'une variable
$sheedan = "sheedan";
echo "<p>La variable 'sheedan' est de type " . gettype($sheedan) . "</p>";

//ucfirst() : met la première lettre en majuscule
$phrase = "nathan semble pensif !";
echo "<p>" . ucfirst($phrase) . "</p>";
//ucwords() : met la première lettre de chaque mot en majuscule
echo "<p>" . ucwords($phrase) . "</p>";

$phraseMamieSimone = "Monsieur, JE VEUX un cercueil EN chêne MASSIF !";
echo "<p>" . ucfirst(strtolower($phraseMamieSimone)) . "</p>";

//date() : retourne la date au format spécifié
echo "<p>Aujourd'hui, nous sommes le " . date("d/m/Y H:i:s") . "</p>";

//temps unix : temps universel informatique (nombre de secondes écoulées depuis le 1er janvier 1970 à 00:00:00)
echo "<p>Le timestamp Unix actuel est : " . time() . "</p>";


//strpos() : recherche la position d'une chaîne dans une autre
$gloriaEmail = "coucou@gloria.com";
$position = strpos($gloriaEmail, "@");
echo $position; //6
if ($position === false) {
      echo "<p>Le caractère @ n'a pas été trouvé dans l'adresse email</p>";
} else {
      echo "<p>Le caractère @ a été trouvé à la position $position dans l'adresse email</p>";
}

//strlen() : retourne le nombre d'octets dans une chaîne de caractères
$phrase = "Il fait cet été !";
echo "<p>La longueur de la phrase est : " . strlen($phrase) . " octets</p>";

//iconv_strlen() : retourne la longueur d'une chaîne de caractères
echo "<p>La longueur de la phrase est : " . iconv_strlen($phrase) . " caractères</p>";

//substr() : extrait une sous-chaîne d'une chaîne de caractères
$article = "lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ";
echo "<p>" . substr($article, 0, 50) . "...</p>"; //extrait les 50 premiers caractères

echo '<h2>Les fonctions utilisateurs</h2>';
//déclaration d'une fonction
function direBonjour()
{
      echo "<p>Bonjour tout le monde !</p>";
}
//appel de la fonction
direBonjour();
direBonjour();
direBonjour();
direBonjour();
direBonjour();

function direBonjour2(string|float $prenom)
{
      echo "<p>Bonjour $prenom !</p>";
}
direBonjour2("Nathan");
direBonjour2("Corentin");
direBonjour2("Sheedan");
direBonjour2(3.14);
direBonjour2(2025);


function age(int $age, string $prenom = "Corentine"): object|string
{
      if ($age < 18) {
            return "<p>$prenom est mineure</p>";
            echo 'toto';
      } else {
            return "<p>$prenom est majeure</p>";
            echo 'tutu';
      }
}

//age(15); //ne rien afficher 
echo "<p>" . age(15) . "</p>";
echo "<p>" . age(35, "Gloria") . "</p>";

//exercice : créer une fonction qui calcule la somme de deux nombres et retourne le résultat
function addition(int|float $num1, int|float $num2): int|float
{
      return $num1 + $num2;
}
echo "<p>Le résultat de l'addition est de : " . addition(2, 2) . "</p>";
//créez une fonction météo qui affichera la phrase suivante : 
/*
"Nous sommes en été et il fait 20 degrés" 
"Nous sommes au printemps et il fait 0 degré" 
"Nous sommes en hiver et il fait -1.4 degrés" 

*/
function meteo(string $saison, float|int $temperature)
{
      $saison = ($saison === "printemps") ? "au " . $saison : "en " . $saison;
      echo "<p>Nous sommes $saison et il fait $temperature degré" .
            (($temperature <= 1 && $temperature >= -1) ? "" : "s") . "</p>";
}
meteo("été", 20);
meteo("printemps", 0);
meteo("hiver", -1.4);

//exercice : réaliser une calcultatrice : trois paramètres (nombre1, nombre2, opération)
function calculatrice(int|float $nombre1, int|float $nombre2, string $operator)
{
      if ($operator === "+") {
            return $nombre1 + $nombre2;
      } elseif ($operator === "-") {
            return $nombre1 - $nombre2;
      } elseif ($operator === "*") {
            return $nombre1 * $nombre2;
      } elseif ($operator === "/") {
            if ($nombre2 === 0) {
                  return "Erreur : division par zéro";
            }
            return $nombre1 / $nombre2;
      } else {
            return "Opérateur non reconnu";
      }
}
echo "<p>Le résultat de l'opération est : " . calculatrice(10, 5, "+") . "</p>";
echo "<p>Le résultat de l'opération est : " . calculatrice(10, 5, "-") . "</p>";
