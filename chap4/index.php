<?php
echo '<h2>Les tableaux de données</h2>';
//création du tableau : 
$fruits = array("pomme", "banane", "fraise", "kiwi", "orange");
echo '<pre>';
print_r($fruits);
echo '</pre>';

echo '<pre>';
var_dump($fruits);
echo '</pre>';

//affichage ; 
echo "<p>Luca mange une " . $fruits[4] . "</p>";


$multiVal = [
      "couleurs" => ["rouge", "vert", "bleu"],
      "nombres" => [1, 2, 3, 4, 5],
      "animaux" => ["chien", "chat", "lapin"]
];
echo '<pre>';
print_r($multiVal);
echo '</pre>';

echo '<p>Rayane mange un ' . $multiVal['animaux'][2] . ' ' . $multiVal['couleurs'][0] . '</p>';

//-
$menu = array(
      "Entrées" => array("Pain", "Légumes", "Toast"),
      "Plats" => array("Agneau", "Kebab", "Pizza"),
      "Desserts" => array("Tiramisu", "Glace")
);
echo '<pre>';
print_r($menu);
echo '</pre>';

echo '<ul>';
echo '<li>Entrées : <ul>';
echo '<li>' . $menu['Entrées'][0] . '</li>';
echo '<li>' . $menu['Entrées'][1] . '</li>';
echo '<li>' . $menu['Entrées'][2] . '</li>';
echo '</ul></li>';
echo '<li>Plats : <ul>';
echo '<li>' . $menu['Plats'][0] . '</li>';
echo '<li>' . $menu['Plats'][1] . '</li>';
echo '<li>' . $menu['Plats'][2] . '</li>';
echo '</ul></li>';
echo '<li>Desserts : <ul>';
echo '<li>' . $menu['Desserts'][0] . '</li>';
echo '<li>' . $menu['Desserts'][1] . '</li>';
echo '</ul></li>';
echo '</ul>';


echo '<h2>Les boucles</h2>';
//boucle while
$i = 0;
while ($i <= 100) {
      echo "<p>La valeur de i est de : $i</p>";
      $i++;
}

//boucle for : 
for ($j = 99; $j >= 3; $j -= 3) {
      echo "<p>La valeur de j est de : $j</p>";
}
echo '<select>';
for ($year = 1900; $year <= date('Y'); $year++) : ?>
      <option><?= $year; ?></option>
<?php
endfor;
echo '</select>';

//foreach : pour les tableaux 
echo '<h3>menu :</h3>';
//exercice : découvrez la boucle foreach en affichant le tableau $menu
echo $menu['Entrées'][0];
echo '<pre>';
print_r($menu);
echo '</pre>';


foreach ($menu as $indiceTabMenu => $valueMenu) {
      echo '<h4>' . $indiceTabMenu . '</h4>';
      echo '<ul>';
      foreach ($valueMenu as $item) {
            echo '<li>' . $item . '</li>';
      }
      echo '</ul>';
}

//exercice : alphabet
$i = "a";
while ($i != "q") {
      echo $i . '--';
      $i++;
}

//exercice tableau des mois
$moisFrancais       = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];

$couleur             = ['blue', 'white', 'red', 'yellow', 'grey', 'lime', 'lightblue', 'fuchsia', 'lightgrey', 'olive', 'pink', 'purple'];
echo '<pre>';
print_r($couleur);
echo '</pre>';
echo "<p>Il y a " . sizeof($moisFrancais) . " mois dans une année.</p>";
echo "<p>Il y a " . count($couleur) . " couleurs.</p>";

echo '<table border="1">';
$j = 1;
while ($j <= count($moisFrancais)) {
      echo '<tr>';
      echo '<td style="background:' . $couleur[$j - 1] . '">' . $j . '</td>';
      echo '<td>' . $moisFrancais[$j - 1] . '</td>';
      echo '</tr>';
      $j++;
}
echo "</table>";

//exercice : A l’aide d’une boucle, calculez la somme des nombres de 0 à 30
$somme = 0;
for ($i = 0; $i <= 30; $i++) {
      $somme += $i;
}
echo "<p>La somme des nombres de 0 à 30 est de : $somme</p>";

$newSomme = 0;
$r = 0;
while ($r <= 30) {
      $newSomme += $r;
      $r++;
}
echo "<p>La somme des nombres de 0 à 30 est de : $newSomme</p>";

/* Exercice : 	
				1- Afficher l'image n°1 avec 1 ligne d'HTML.
				2- Afficher 5 fois l'image n°1 avec une seule balise <img> 
				3- Afficher les 5 images différentes avec une seule balise <img> 
*/ ?>
<img src="img/image1.png" alt="Image 1" width="100">
<?php
for ($i = 1; $i <= 5; $i++) : ?>
      <img src="img/image1.png" alt="Image 1" width="100">
<?php
endfor;
echo '<hr>';
for ($o = 1; $o <= 5; $o++) : ?>
      <img src="img/image<?= $o ?>.png" alt="Image <?= $o ?>" width="100">
<?php
endfor;
