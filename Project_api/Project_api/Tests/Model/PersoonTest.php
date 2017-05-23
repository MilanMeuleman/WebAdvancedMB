<?php

include_once(dirname(__FILE__) . '/Project_api/Model/Persoon.php');
//namespace ..\Project_api\Model;
//require_once 'PHPUnit/Autoload.php';

use Model\Persoon;


class PersoonTest extends \PHPUnit\Framework\TestCase{

    protected $persoon;

    //Opzetten van het testobject, wordt uitgevoerd voor de tests
    protected function setUp(){
        $this->persoon = new Persoon(12,"test2");
    }

    //Afbreken van het testobject, wordt uitgevoerd na de tests
    protected function teardown(){
        unset($this->persoon);
    }

    //Testen van de getters
    public function test_getPersoonIDTest_equals_12(){
        //test of juiste waardes verkregen worden met assertExquals
        $expected = 12;
        $actual = $this->persoon->getPersoonID();
        $this->assertEquals($expected, $actual);
    }

    public function test_getPersoonNaamTest_equals_test2(){
        //test of juiste waardes verkregen worden met assertExquals
        $expected = "test2";
        $actual = $this->persoon->getPersoonNaam();
        $this->assertEquals($expected, $actual);
    }
}