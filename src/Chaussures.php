<?php 
require_once('Vetements.php');

class Chaussures extends Vetements 
{
    private $pointure; 

    public function __construct($prix , $dispo,int $pointure)
    {
        parent::__construct($prix, $dispo);
        $this->pointure = $pointure;     
    }

    public function getPointure()
    {
        return $this->pointure;
    }

}