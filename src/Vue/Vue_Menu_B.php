<?php
namespace App\Vue;
use App\Utilitaire\Vue_Composant;

$Vue->setMenu(new \App\Vue\Vue_Menu_B());
class Vue_Menu_B extends Vue_Composant
{
    public function __construct( )
    {           }
    function donneTexte(): string
    {

                return "
             <nav id='menu'>
              <ul id='menu-closed'> 
                <li><a href='?case=A'>cas A</a></li>
                <li><a href='?case=B'>****cas B****</a></li>   
                   </ul>
            </nav> 
";
              
    }
}
