<h3>$_GET : La Superglobale des variables passées en URL</h3>
<a href="page1.php?article=voiture&prix=20000&modele=porsche&couleur=verte">Aller à la page 1</a>

<?php
if (isset($_GET['error']) && $_GET['error'] == "missing_parameters") {
      echo "<div style='background:red;padding:3%;color:white;'>Erreur : WTF !!! touche pas à l'url wesh !!! </div>";
}
