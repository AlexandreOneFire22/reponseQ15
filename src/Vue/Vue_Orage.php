<?php

namespace App\Vue;

use App\Utilitaire\Vue_Composant;

class Vue_Orage extends Vue_Composant
{
    private string $msgErreur;
    public function __construct(string $msgErreur ="")
    {
        $this->msgErreur=$msgErreur;
    }

    function donneTexte(): string
    {
        $str= "

<h1> Calculer la distance d'un orage :</h1>

<div>
    <form action='' method='post' novalidate>

        <div class='mb-3'>
            <label for='temps' class='form-label'>Temps (s)* :</label>
            <input type='number'
                   class='form-control'
                   id='temps'
                   name='temps'
                    placeholder='temps en seconde'>
        </div>


<span>
                <input type='hidden' name='case' value='orage'>
                <button type='submit' name='action' value='resultat'>Valider</button>
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
           
            <button type='submit' name='case' value='imc'>
                Imc
            </button>
            <button type='submit' name='case' value='orage'>
                Orage
            </button>
            
    </form>
    
     
</div>
        $this->msgErreur
    ";
        return $str ;
    }
}