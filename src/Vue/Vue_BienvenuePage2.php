<?php
namespace App\Vue;
use App\Utilitaire\Vue_Composant;

class Vue_BienvenuePage2 extends Vue_Composant
{
    private string $msgErreur;
    public function __construct(string $msgErreur ="")
    {
        $this->msgErreur=$msgErreur;
    }

    function donneTexte(): string
    {
        $str= "
<h1>Café : J'aime !</h1>
<div  style='    width: 50%;    display: block;    margin: auto;'>  
    Bienvenue sur le site de la société Café !
    
    Pages 2/3
    <form action='index.php' method='post'>
            <input type='hidden' name='action' value='allerPagePrecedente'>
            <button type='submit' id='submit' name='action' value='Page1' >
                Page 1
            </button>
            <button type='submit' id='submit' name='action' value='Page3' >
                Page 3
            </button>
    </form>
</div>
        $this->msgErreur
    ";
        return $str ;
    }
}