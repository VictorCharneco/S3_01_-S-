<?php

require_once ("GestioAtletes.php");

class Resultats{

    public function mostrarResultats($events, $results, $gestioAtletes){
        echo "Olympic Games Results:\n";
        foreach($events as $event){
            echo "Event: " . $event['event'] . " on " . $event['date'] . "\n";
            foreach($results as $result){
                if($result['event'] === $event['event']){
                    $country = $gestioAtletes->getCountry($result['athlete']);
                    echo "- " . $result['athlete'] . " from " . $country . " won " . $result['medal'] . "\n";
                }
            }
        }
    }

}


?>