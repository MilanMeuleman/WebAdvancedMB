<?php

namespace Controller;

use Model\EventRepository;
use View\View;

class EventController
{
    private $EventRepository;
    private $view;

    public function __construct(EventRepository $EventRepository, View $view)
    {
        $this->EventRepository = $EventRepository;
        $this->view = $view;
    }

    public function handleFindEventById($id = null)
    {
        $event = $this->EventRepository->findEventByID($id);
        $this->view->show(['Event' => $event]);
    }

    public function findAllEvents()
    {
        $event = $this->EventRepository->findAllEvents();
        $this->view->show(['Event' => $event]);
    }

    public function findPersonByID($id = null)
    {
        $event = $this->EventRepository->findPersonByID($id);
        $this->view->show(['Persoon' => $event]);
    }

    public function findByDate($startDate, $EindDatum)
    {
        $event = $this->EventRepository->findByDate($startDate, $EindDatum);
        $this->view->show(['Event' => $event]);
    }

    public function findByPersonIDAndDate($id, $StartDatum, $EindDatum)
    {
        $event = $this->EventRepository->findByPersonIDAndDate($id, $StartDatum, $EindDatum);
        $this->view->show(['Event' => $event]);
    }

    public function add($id)
    {
        $ev = $this->EventRepository->add($id);
        //$this->view->show($ev);
    }

    public function remove($id)
    {

        $ev = $this->EventRepository->remove($id);
    }

    public function update($id)
    {

        $ev = $this->EventRepository->update($id);
        //$this->view->show($ev);
    }

}