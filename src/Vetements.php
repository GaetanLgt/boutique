<?php

    class Vetements
    {
        private $prix;
        private $dispo;

        public function __construct(int $prix,int $dispo)
        {
            $this->prix = $prix;
            $this->$dispo = $dispo;
        }

        public function getPrix()
        {
            return $this->prix;
        }

        public function getDispo()
        {
            return $this->dispo;
        }

    }