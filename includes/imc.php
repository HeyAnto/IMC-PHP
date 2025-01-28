<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $age = $_POST["age"];
    $poids = $_POST["poids"];
    $taille = $_POST["taille"];

    if (isset($age) && isset($poids) && isset($taille)) {
        $tailleEnMètres = $taille / 100; // Converti la taille cm => mètres
        $imc = $poids / ($tailleEnMètres * $tailleEnMètres); // Poids divisé par la taille au carré

        $categorie = "";
        if ($imc < 18.5) { // IMC inférieur à 18.5 = la catégorie
            $categorie = "Insuffisance pondérale (maigreur)";
        } elseif ($imc < 25) { // IMC compris entre 18.5 et 25 = la catégorie
            $categorie = "Corpulence normale";
        } elseif ($imc < 30) {
            $categorie = "Surpoids";
        } elseif ($imc < 35) {
            $categorie = "Obésité modérée";
        } elseif ($imc < 40) {
            $categorie = "Obésité sévère";
        } else { // IMC est supérieur ou égal à 40 = la catégorie
            $categorie = "Obésité morbide ou massive";
        }

        echo "<p>Votre IMC est de : <b>" . number_format($imc, 1) . "</b></p>";
        echo "<p>Catégorie : <b>" . $categorie . "</b></p>";
    }
}
