<?php
class XMLParser{
    public static function ParseXML(){
        $xml=simplexml_load_file("test.xml") or die("Error: Cannot create object");
        $info = array($xml->Login[0]->Username,$xml->Login[0]->Password,$xml->Login[0]->DatabaseName,$xml->Login[0]->hostname);

      return $info;
    }
}
