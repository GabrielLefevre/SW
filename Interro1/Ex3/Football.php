<?php

/**
 * Created by PhpStorm.
 * User: gabriel.lefevre
 * Date: 14/11/16
 * Time: 11:18
 */
class Football extends Equipe
{
    private $stade;
    private $countUtilStade;

    /**
     * Football constructor.
     * @param $stade
     * @param $countUtilStade
     */
    public function __construct($stade="", $countUtilStade=0,$n="",$nbJ=0,$countEqj=0)
    {
        parent::__construct();
        $this->stade = $stade;
        $this->countUtilStade = $countUtilStade;

    }

    public function countCompetition()
    {
        // TODO: Implement countCompetition() method.
    }

    function __toString()
    {
        return "stade : ".$this->stade.PHP_EOL."nom : ".$this->nom.PHP_EOL;
    }


}