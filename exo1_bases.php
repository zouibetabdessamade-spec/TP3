
<?php
/*
Auteur : Abdessamade Zouibet
Objectif : Tester le fonctionnement de PHP
*/

require "config.php";

echo "Hello PHP";

echo "<h2>Exercice 1.2 : Les Constantes</h2>";

// Affichage de chaque constante
echo "<p>Établissement : " . ETABLISSEMENT . "</p>";
echo "<p>Note minimale : " . NOTE_MIN . "</p>";
echo "<p>Note maximale : " . NOTE_MAX . "</p>";
echo "<p>Seuil : " . SEUIL . "</p>";

// Test avec defined()
if (defined('SEUIL')) {
    echo "<p>La constante SEUIL existe bien.</p>";
}

if (!defined('INCONNUE')) {
    echo "<p>La constante INCONNUE n'existe pas.</p>";
}

/* 
   -------------------------------------------------------------
   REPONSES AUX QUESTIONS DU TP (à placer en commentaire)
   -------------------------------------------------------------

   1. Que se passe-t-il si vous affichez une constante non définie ?
   -> PHP émet une erreur de type "Notice" ou "Warning" (selon la version) 
      indiquant qu'il utilise directement le nom de la constante comme une 
      chaîne de caractères, puis il finit par générer une erreur fatale 
      dans les versions récentes de PHP si elle n'est pas trouvée.

   2. Quelle différence y a-t-il entre 'const' et 'define()' ?
   -> - 'const' est évaluée à la compilation. Elle ne peut être utilisée qu'au niveau 
        global du script ou à l'intérieur de classes (pas dans des blocs if ou des fonctions).
      - 'define()' est évaluée à l'exécution. Elle peut donc être placée de manière 
        dynamique à l'intérieur de conditions (if), de boucles ou de fonctions.
*/