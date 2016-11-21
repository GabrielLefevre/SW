<?php

/**
 * Created by PhpStorm.
 * User: gabriel.lefevre
 * Date: 14/11/16
 * Time: 11:06
 */
abstract class Equipe
{
    private static $numEq;
    private $id;
    public $nbJoueurs;
    protected $nom;
    protected $coutEqJoueur;

    /**
     * Equipe constructor.
     * @param $nbJoueurs
     * @param $nom
     * @param $coutEqJoueur
     */
    public function __construct($nbJoueurs=0, $nom="", $coutEqJoueur=0)
    {
        $this->nbJoueurs = $nbJoueurs;
        $this->nom = $nom;
        $this->coutEqJoueur = $coutEqJoueur;
    }

    abstract function countCompetition();

    function __toString()
    {
        // TODO: Implement __toString() method.
    }

    function __clone()
    {
        // TODO: Implement __clone() method.
    }


}