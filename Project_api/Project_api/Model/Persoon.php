<?php
/**
 * Created by PhpStorm.
 * User: 11400917
 * Date: 6/04/2017
 * Time: 22:24
 */

namespace Model;


class Persoon
{
    private $persoonID;
    private $persoonNaam;

public function __construct($persoonId,$persoonNaam)
{
   $this->persoonID = $persoonId;
   $this->persoonNaam = $persoonNaam;
}


    public function getPersoonID()
    {
        return $this->persoonID;
    }

    public function getPersoonNaam()
    {
        return $this->persoonNaam;
    }

    public function setPersoonID($persoonID)
    {
        $this->persoonID = $persoonID;
    }

    public function setPersoonNaam($persoonNaam)
    {
        $this->persoonNaam = $persoonNaam;
    }

}
