<?php

require "vendor/autoload.php";
require('XMLParser.php');
$info = XMLParser::ParseXML();
// using
use View\EventJsonView;
use Model\PDOEventRepository;
use Controller\EventController;


$user = $info[0];
$password = $info[1];
$database = $info[2];
$hostname = $info[3];
$pdo = null;
try {
    $pdo = new PDO("mysql:host=$hostname;dbname=$database",
        $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION);

    $eventPDORepository = new PDOEventRepository($pdo);


    $eventJsonView = new EventJsonView();


    $eventController = new EventController(
        $eventPDORepository, $eventJsonView);



    $router = new AltoRouter();
    $router->setBasePath('/~user/Project_api');

    $router->map('GET','/events/Persoon/[i:id]',
        function($id) use (&$eventController) {
            $eventController->findPersonByID($id);
        }
    );

    $router->map('GET','/events/[i:id]',
        function($id) use (&$eventController) {
            $eventController->handleFindEventById($id);
        }
    );

    $router->map('GET','/events',
        function() use (&$eventController) {
            $eventController->findAllEvents();
        }
    );

   $router->map('GET','/events/[:StartDatum]/[:EindDatum]',
        function($StartDatum,$EindDatum) use (&$eventController) {
            $eventController->findByDate($StartDatum,$EindDatum);
        }
    );

    $router->map('GET','/Persoon/[i:id]/events/[:StartDatum]/[:EindDatum]',
        function($id,$StartDatum,$EindDatum) use (&$eventController) {
            $eventController->findByPersonIDAndDate($id,$StartDatum,$EindDatum);
        }
    );

    $router->map('DELETE','/events/[i:id]',
        function($id) use (&$eventController) {
            $eventController->remove($id);
        }
    );

    $router->map('PUT','/events/[i:id]',
        function($id) use (&$eventController) {
            //$temp = file_get_contents('php://input');
            //var_dump(json_decode($temp));
            $eventController->update($id);
        }
    );

    $router->map('POST','/events/[i:id]',
        function($id) use (&$eventController) {
            $temp = file_get_contents('php://input');
            var_dump(json_decode($temp));
            $eventController->add($id);
        }
    );

    $match = $router->match();
    //var_dump($match);
    if( $match && is_callable( $match['target'] ) ){
        call_user_func_array( $match['target'], $match['params'] );
    }
} catch (Exception $e) {
    var_dump($e);
}