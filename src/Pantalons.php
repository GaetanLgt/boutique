<?php 
require_once('Vetements.php');

class Pantalons extends Vetements 
{
    private $taille; 

    public function __construct($prix , $dispo,int $taille)
    {
        parent::__construct($prix, $dispo);
        $this->taille = $taille;     
    }

    public function getTaille()
    {
        return $this->taille;
    }
}