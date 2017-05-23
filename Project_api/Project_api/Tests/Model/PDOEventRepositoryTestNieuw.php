<?php

use \Model\Event;
use \Model\Persoon;
use \Model\PDOEventRepository;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Exception\RequestException;

class PDOEventRepositoryTest extends PHPUnit_Framework_TestCase {


	protected function setUp() {
		$this->mockPDO = $this->getMockBuilder('PDO')->disableOriginalConstructor()->getMock();
		$this->mockPDOStatement = $this->getMockBuilder('PDOStatement')->disableOriginalConstructor()->getMock();
        $this->http = new GuzzleHttp\Client(['base_uri' => 'https://httpbin.org/']);
	}
	
	public function testFindPersonByID_equals_Abraham() {
		$persoon = new Persoon(1,"Abraham");
		$this->mockPDOStatement->expects($this->atLeastOnce())->method('bindParam');
		$this->mockPDOStatement->expects($this->atLeastOnce())->method('execute');
		$this->mockPDOStatement->expects($this->atLeastOnce())->method('fetchAll')
				->will($this->returnValue(
					[
						[
                            'PersoonID' => $persoon -> getPersoonID(),
							'PersoonNaam' => $persoon -> getPersoonNaam()
						]
					]
				));
		$this->mockPDO->expects($this->atLeastOnce())->method('prepare')->will($this->returnValue($this->mockPDOStatement));
		$pdoRepository = new PDOEventRepository($this->mockPDO);
		$actualPersoon = $pdoRepository->findPersonByID($persoon->getPersoonID());

		$this->assertEquals($persoon, $actualPersoon);
	}
	
	public function testfindAllEvents(){
		$event = new Event(12, 1, "12/02/2018","12/03/2018","test beschrijving");
		$event2 = new Event(13, 3, "14/03/2018","16/03/2018","test beschrijving 1");
		
		$allEvents = Array($event,$event2);
		
		$this->mockPDOStatement->expects($this->atLeastOnce())
			 ->method('execute');
		$this->mockPDOStatement->expects($this->atLeastOnce())
			 ->method('fetchAll')
			 ->will($this->returnValue(
				[
					[
						'EventID' => $event->getEventId(),
						'Beschrijving' => $event->getBeschrijving(),
						'StartDatum' => $event->getStartDatum(),
						'Einddatum' => $event->getEindDatum(),
						'PersoonID' => $event->getPersoonId()
					],
					[
						'EventID' => $event2->getEventId(),
						'Beschrijving' => $event2->getBeschrijving(),
						'StartDatum' => $event2->getStartDatum(),
						'Einddatum' => $event2->getEindDatum(),
						'PersoonID' => $event2->getPersoonId()
					],
				]
			));
		$this->mockPDO->expects($this->atLeastOnce())
			 ->method('prepare')
			 ->will($this->returnValue($this->mockPDOStatement));
		$pdoRepository = new PDOEventRepository($this->mockPDO);
		$actualEvents=$pdoRepository->findAllEvents();
		
		$this->assertEquals($allEvents, $actualEvents);
	}
	
	public function testFindEventByID_equals_EventObject(){
		$event = new Event(12, 1, "12/02/2018","12/03/2018","test beschrijving");
		
		$this->mockPDOStatement->expects($this->atLeastOnce())
			 ->method('bindParam');
		$this->mockPDOStatement->expects($this->atLeastOnce())
			 ->method('execute');
		$this->mockPDOStatement->expects($this->atLeastOnce())
			 ->method('fetchAll')
			 ->will($this->returnValue(
				[
					[
						'EventID' => $event->getEventId(),
						'Beschrijving' => $event->getBeschrijving(),
						'StartDatum' => $event->getStartDatum(),
						'Einddatum' => $event->getEindDatum(),
						'PersoonID' => $event->getPersoonId()
					]
				]
             ));
		$this->mockPDO->expects($this->atLeastOnce())
			 ->method('prepare')
			 ->will($this->returnValue($this->mockPDOStatement));
		$pdoRepository = new PDOEventRepository($this->mockPDO);
		$actualEvent = $pdoRepository->findEventByID($event->getEventId());

		$this->assertEquals($event,$actualEvent);
	}
	
	public function testfindEventByDate_equals_EventObject(){
		$event = new Event(12, 1, "12/02/2018","12/03/2018","test beschrijving");
		$this->mockPDOStatement->expects($this->atLeastOnce())
			 ->method('bindParam');
		$this->mockPDOStatement->expects($this->atLeastOnce())
			 ->method('execute');
		$this->mockPDOStatement->expects($this->atLeastOnce())
			 ->method('fetchAll')
			 ->will($this->returnValue(
				[
					[
						'EventID' => $event->getEventId(),
						'Beschrijving' => $event->getBeschrijving(),
						'StartDatum' => $event->getStartDatum(),
						'Einddatum' => $event->getEindDatum(),
						'PersoonID' => $event->getPersoonId()
					]
				]
             ));
		$this->mockPDO->expects($this->atLeastOnce())
			 ->method('prepare')
			 ->will($this->returnValue($this->mockPDOStatement));
		$pdoRepository = new PDOEventRepository($this->mockPDO);
		$actualEvent = $pdoRepository->findByDate($event->getStartDatum(), $event->getEindDatum());
		
		$this->assertEquals($event, $actualEvent);
	}
	
	 public function testfindByPersonIDAndDate_equals_EventObject(){
		$event = new Event(12, 1, "12/02/2018","12/03/2018","test beschrijving");
		//$allEvents = Array($event);
		$this->mockPDOStatement->expects($this->atLeastOnce())->method('bindParam');
		$this->mockPDOStatement->expects($this->atLeastOnce())->method('execute');
		$this->mockPDOStatement->expects($this->atLeastOnce())->method('fetchAll')
				->will($this->returnValue(
					[
						[
							'EventID' => $event->getEventId(),
							'Beschrijving' => $event->getBeschrijving(),
							'StartDatum' => $event->getStartDatum(),
							'Einddatum' => $event->getEindDatum(),
							'PersoonID' => $event->getPersoonId()
						]
					]
				));
		$this->mockPDO->expects($this->atLeastOnce())->method('prepare')->will($this->returnValue($this->mockPDOStatement));
		$pdoRepository = new PDOEventRepository($this->mockPDO);
		$actualEvent = $pdoRepository->findByPersonIDAndDate($event->getPersoonId(), $event->getStartDatum(), $event->getEindDatum());
		
		$this->assertEquals($event, $actualEvent);
	 }

    public function testPost()
    {
        // create our http client (Guzzle)
        $id = 6;
        $data = array(
            'EventID' => $id,
            'PersoonID' => 1,
            'StartDatum' => '12/02/2018',
            'Einddatum' => '12/03/2019',
            'Beschrijving' => 'a test!'
        );
        $client = new \GuzzleHttp\Client();
        $res = $client->request('POST','http://192.168.117.129/~user/Project_api/events/'. $id, $data);
        //$request = $res->post('/events/'.$id , null, json_encode($data));
        //$response = $res->send();

        $this->assertEquals(200, $res->getStatusCode());
        //$this->assertTrue($response->hasHeader('Location'));
        //$data = json_decode($res->getBody(true), true);
        //$this->assertArrayHasKey($id, $data);
    }

    public function testPut()
    {
        $client = new \GuzzleHttp\Client();
        $id = 6;
        $data = array(
            'EventID' => $id,
            'PersoonID' => 1,
            'StartDatum' => '12/02/2018',
            'Einddatum' => '12/03/2019',
            'Beschrijving' => 'a test!'
        );
        $res = $client->request('PUT','http://192.168.117.129/~user/Project_api/events/'. $id, $data);
        //$response = $this->http->request('PUT', 'user-agent', ['http_errors' => false]);
        $this->assertEquals(200, $res->getStatusCode());
    }
    public function testDelete()
    {
        $client = new \GuzzleHttp\Client();
        $id = 6;
        $data = array(
            'EventID' => $id,
            'PersoonID' => 1,
            'StartDatum' => '12/02/2018',
            'Einddatum' => '12/03/2019',
            'Beschrijving' => 'a test!'
        );
        $res = $client->request('DELETE','http://192.168.117.129/~user/Project_api/events/'. $id, $data);
        var_dump($res);
        $this->assertEquals(200, $res->getStatusCode());
    }

    protected function teardown(){
        unset($this->mockPDO);
        unset($this->mockPDOStatement);
        $this->http = null;
    }
}