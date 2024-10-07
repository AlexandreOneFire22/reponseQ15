<?php

$Vue->setMenu(new \App\Vue\Vue_Orage());
switch ($action) {
    case "defaut":
        break;
    case "resultat":

        $distanceOrage = ($_POST["temps"]*340.29)/1000;
        $distanceOrage = round($distanceOrage,2);

        $Vue->addToCorps(new \App\Vue\Vue_AfficherMessage("<h3>L'orage se trouve à une distance de : $distanceOrage km</h3>"));
        break;
}