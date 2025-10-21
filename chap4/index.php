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
//exercice : découvrer la boucle foreach en affichant le tableau $menu