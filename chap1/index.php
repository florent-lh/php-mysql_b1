<p>Nathan a tout compris</p>
<?php
echo '<p>Bonjour le monde !</p>';
echo "<p>Bonjour le monde !</p>";
// Ceci est un commentaire sur une seule ligne
# Ceci est aussi un commentaire sur une seule ligne
/* Ceci est un commentaire
sur plusieurs lignes */
?>
<?php
echo '<h2>Les variables</h2>';
/*
pas d'espace dans le nom
ne débute pas par un chiffre
pas d'espace
pas de caractère spéciaux (sauf _)
*/
$personnage = "Link";
echo $personnage;
$variable = 75; // type entier
$prix = 19.99; // type flottant
echo $variable + $prix;

$variable = $personnage;
echo $variable;

//affectation par copie : 
$firstVar = 5;
$secondVar = $firstVar;
$secondVar = $firstVar + 1;
echo $secondVar; // affiche 6

//variables dynamiques
$personnage = "link";
${$personnage} = "zelda";
echo $link;

${$personnage . "Mechant"} = "Ganon";
echo $linkMechant;

//la concaténation : ...est suivi de... 
$x = "Bonjour ";
$y = "tout le monde !";
echo $x . $y;
echo "$x $y";

//concaténation avec affectation
$phrase = "Karifala ";
$phrase .= "mange une pomme ";
$phrase .= "assit sur une chaise ";
echo $phrase . "<br>";

//quotes & guillemets 
echo '$phrase' . "<br>"; // affiche $phrase
echo "$phrase" . "<br>"; // affiche le contenu de $phrase

echo '<h2>Types de données</h2>';
$varString = "Ceci est une chaîne de caractères"; // string
echo "<p>La valeur '$varString' est de type " . gettype($varString) . "</p>";

$varInt = 42; // integer
echo "<p>La valeur '$varInt' est de type " . gettype($varInt) . "</p>";

$varFloat = 3.14; // float
echo "<p>La valeur '$varFloat' est de type " . gettype($varFloat) . "</p>";

$varBool = true; // boolean
echo "<p>La valeur '$varBool' est de type " . gettype($varBool) . "</p>";

$varArray = [1, 2]; // array
echo "<p>Type : " . gettype($varArray) . "</p>";

$varObj = new DateTime(); // object
echo "<p>Type : " . gettype($varObj) . "</p>";

echo "<h2>Constantes</h2>";
// définition d'une constante
define("CAPITALE", "Paris");
echo "<p>La capitale de la France est " . CAPITALE . "</p>";

const URL_GOOGLE = "https://www.google.com";
echo '<a href="' . URL_GOOGLE . '" target="_blank">Cliquer ici pour accéder à Google</a>';

//ERREUR : const URL_GOOGLE = "https://www.google.fr";

const PI = 3.14;
$rayon = 5;
$surface = PI * $rayon * $rayon;
echo "<p>La surface d'un cercle de rayon $rayon est de $surface</p>";

echo "<h2>Constantes magiques</h2>";
echo "<p>Numéro de la ligne : " . __LINE__ . "</p>";
echo "<p>Nom du fichier : " . __FILE__ . "</p>";
echo "<p>Nom du répertoire : " . __DIR__ . "</p>";
echo '<p>Version de PHP : ' . PHP_VERSION . '</p>';
/*
constantes magiques en objet :
__CLASS__
__METHOD__
__FUNCTION__
*/
echo "<h2>Exercice</h2>";
/*
VOici trois variables :
$bleu = "bleu"; 
$blanc = "blanc";
$rouge = "rouge";
afficher bleu - blanc - rouge 
De trois manières différentes en utilisant les variables
Durée : 5min 
*/
$bleu = "bleu";
$blanc = "blanc";
$rouge = "rouge";
echo $bleu . ' - ' . $blanc . ' - ' . $rouge . '<br>';
echo "$bleu - $blanc - $rouge<br>";
$couleur = "$bleu - $blanc - $rouge";
echo $couleur;

echo '<h2>Opérateurs arithmétiques</h2>';

$a = 10;
$b = 2;
echo $a + $b . "<br>"; // addition : 12
echo $a - $b . "<br>"; // soustraction : 8
echo $a * $b . "<br>"; // multiplication : 20
echo $a / $b . "<br>"; // division : 5
$p = 3;
$q = 7;
echo $q % $p . "<br>"; // modulo : 1

// opération/affectation : 
$panierIsrael = 0;
$panierIsrael = $panierIsrael + 1; // panier = 1
$panierIsrael += 3; // panier = 4
$panierIsrael -= 1; // panier = 3
echo $panierIsrael . "<br>";
$panierIsrael = ++$panierIsrael; // panier = 4 => incrémentation
$panierIsrael = --$panierIsrael; // panier = 3 => décrémentation
echo $panierIsrael . "<br>";

echo '<h2>Opérateurs de comparaison</h2>';
/*
La référence est toujours la valeur de gauche
-1 plus petit que 
0 égal à 
1 plus grand que
*/
echo 1 <=> 1; // 0
echo 1 <=> 2; // -1
echo 2 <=> 1; // 1