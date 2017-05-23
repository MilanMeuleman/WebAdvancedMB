<?php
namespace Model;
class Event
{
    private $eventId;
    private $persoonId;
    private $startDatum;
    private $eindDatum;
    private $beschrijving;


    public function __construct($eventId,$persoonId,$startDatum,$eindDatum,$beschrijving)
    {
        $this->eventId = $eventId;
        $this->persoonId = $persoonId;
        $this->startDatum = $startDatum;
        $this->eindDatum= $eindDatum;
        $this->beschrijving = $beschrijving;
    }

    public function getBeschrijving()
    {
        return $this->beschrijving;
    }

    public function getEindDatum()
    {
        return $this->eindDatum;
    }


    public function getStartDatum()
    {
        return $this->startDatum;
    }


    public function getPersoonId()
    {
        return $this->persoonId;
    }

    public function getEventId()
    {
        return $this->eventId;
    }

    public function setBeschrijving($beschrijving)
    {
        $this->beschrijving = $beschrijving;
    }

    public function setEindDatum($eindDatum)
    {
        $this->eindDatum = $eindDatum;
    }


    public function setEventId($eventId)
    {
        $this->eventId = $eventId;
    }

    public function setPersoonId($persoonId)
    {
        $this->persoonId = $persoonId;
    }

    public function setStartDatum($startDatum)
    {
        $this->startDatum = $startDatum;
    }





}