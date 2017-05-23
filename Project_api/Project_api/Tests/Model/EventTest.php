<?php

//include_once(dirname(__FILE__) . '\Project_api\Model\Event.php');
//namespace ..\Project_api\Model;

use Model\Event;


class EventTest extends PHPUnit_Framework_TestCase{

    public $event;

    //Opzetten van het testobject, wordt uitgevoerd voor de test
    protected function setUp(){
        $this->event = new Event(12, 1, "12/02/2018","12/03/2018","test beschrijving");
    }

    //Afbreken van de testobjecten, dit wordt uitgevoerd na de test
    protected function teardown(){
        unset($this->event);
    }

    //Testen van de getters
    public function test_getBeschrijving_equals_testBeschrijving(){
        //test of juiste waardes verkregen worden met assertExquals
        $expected = "test beschrijving";
        $actual = $this->event->getBeschrijving();
        $this->assertEquals($expected, $actual);
    }

    public function test_getEindDatum_equals_12032018(){
        //test of juiste waardes verkregen worden met assertExquals
        $expected = "12/03/2018";
        $actual = $this->event->getEindDatum();
        $this->assertEquals($expected, $actual);
    }

    public function test_getStartDatum_equals_12022018(){
        //test of juiste waardes verkregen worden met assertExquals
        $expected = "12/02/2018";
        $actual = $this->event->getStartDatum();
        $this->assertEquals($expected, $actual);
    }

    public function test_getPersoonId(){
        //test of juiste waardes verkregen worden met assertExquals
        $expected = 1;
        $actual = $this->event->getPersoonId();
        $this->assertEquals($expected, $actual);
    }

    public function test_getEventId(){
        //test of juiste waardes verkregen worden met assertExquals
        $expected = 12;
        $actual = $this->event->getEventId();
        $this->assertEquals($expected, $actual);
    }

}