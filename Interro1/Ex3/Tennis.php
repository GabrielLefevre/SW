<?php

/**
 * Created by PhpStorm.
 * User: gabriel.lefevre
 * Date: 14/11/16
 * Time: 11:23
 */
class Tennis extends Equipe
{

    private $salle;
    private $countUtilStade;

    /**
     * Football constructor.
     * @param $salle
     * @param $countUtilStade
     */
    public function __construct($salle="", $countUtilStade=0,$n="",$nbJ=0,$countEqj=0)
    {
        parent::__construct();
        $this->salle = $salle;
        $this->countUtilStade = $countUtilStade;

    }

    public function countCompetition()
    {
        // TODO: Implement countCompetition() method.
    }

    function __toString()
    {
        return "salle : ".$this->salle.PHP_EOL."nom : ".$this->nom.PHP_EOL;
    }


}