<?php

class Country
{
    public $name;
    public $totalGoldMedals;

    public function __construct($name,$totalGoldMedals)
    {
        $this->name = $name;
        $this->totalGoldMedals = $totalGoldMedals;
    }

    /**
     * @return mixed
     */
    public function getTotalGoldMedals()
    {
        return $this->totalGoldMedals;
    }

}