<?php

namespace App\Vue;

use App\Utilitaire\Vue_Composant;

class Vue_Imc extends Vue_Composant
{
    private string $msgErreur;
    public function __construct(string $msgErreur ="")
    {
        $this->msgErreur=$msgErreur;
    }

    function donneTexte(): string
    {
        $str= "

<h1> Calculer votre imc :</h1>

<div>
    <form action='' method='post' novalidate>

        <div>
            <label for='taille'>taille (cm)* :</label>
            <input type='number'
                   id='taille'
                   name='taille'
                   placeholder='taille en cm'>
</div>

<div>
    <label for='poids'>Poids (kg)* :</label>
    <input type='number'
           id='poids'
           name='poids'
           placeholder='poids en kg'>
</div>

<span>
                <button type='submit' name='resultat'>Valider</button>
        </span>
</form>
</div>

<div  style='    width: 50%;    display: block;    margin: auto;'>  
    Page d'accueil du contexte A
    <form action='index.php' method='post'>
            <input type='hidden' name='case' value='A'>
            <button type='submit' name='action' value='pageSuivante'>
                Aller à la page suivante
            </button>
    </form>
    
     
</div>
        $this->msgErreur
    ";
        return $str ;
    }
}