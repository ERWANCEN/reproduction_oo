<?php

// je crée une classe appelée 'Reproduction'
class Reproduction{

    /**
     * Tableau contenant les données de tout le monde
     *
     * @var array
     */
    private array $_liste = [
        ["nom" => "durant", "prenom" => "loic", "age" => "29", "metier" => "webmaster", "site" => "openclassroom", "lien" => "https://www.openclassrooms.com/", ],
        ["nom" => "dupont", "prenom" => "michel", "age" => "55", "metier" => "intégrateur", "site" => "alsacreations", "lien" => "https://www.alsacreations.com/.", ], 
        ["nom" => "martin", "prenom" => "yannick", "age" => "25", "metier" => "développeur", "site" => "creative juiz", "lien" => "https://www.creativejuiz.fr/", ]
    ];

    /**
     * Méthode permettant d'obtenir le tableau en dehors de la classe
     *
     * @return array
     */
    public function getReproduction() : array
    {
        return $this->_liste;
    }
}