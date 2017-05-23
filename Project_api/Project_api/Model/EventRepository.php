<?php

namespace Model;


interface EventRepository
{
public function findEventByID($id);
public function findAllEvents();
public function findPersonByID($id);
public function findByDate($StartDate,$EindDatum);
public function findByPersonIDAndDate($id,$StartDatum,$EindDatum);

//CRUD

    public function add($id); //nieuwe event toevoegen in database
    public function remove($id);
    public function update($id); //eerste parameter geeft aan welke te updaten
}
