<?php

$Vue->setMenu(new \App\Vue\Vue_Imc());
switch ($action) {
    case "defaut":
        break;
    case "resultat":

        $imc = $_POST["poids"] / (($_POST["taille"] /100) ** 2);
        $imc = round($imc,2);

        switch (true) {

            case $imc < 18.5 :
                $categorie = "Sous-poids (inférieur à 18,5)";
                break;

            case $imc < 25 :
                $categorie = "Normal (de 18,5 à 25)";
                break;

            case $imc < 30 :
                $categorie = "Surpoids (de 25 à 30)";
                break;

            case $imc < 40 :
                $categorie = "Obésité modérée (de 30 à 40)";
                break;

            default :
                $categorie = "Obésité sévère (supérieur à 40)";
                break;
        }
        $Vue->addToCorps(new \App\Vue\Vue_AfficherMessage("<h3>Votre IMC est de : $imc</h3> <h3>cela correspond à la catégorie : $categorie </h3>"));

        break;
}