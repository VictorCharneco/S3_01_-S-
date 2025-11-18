<?php

require_once("GestioAtletes.php");
require_once("GestioEvents.php");
require_once("GestioResultats.php");
require_once("Resultats.php");

class OlympicGames {
    private $gestioAtletes;
    private $gestioEvents;
    private $gestioResultats;
    private $resultats;

    public function __construct(){
        $this->gestioAtletes = new GestioAtletes();
        $this->gestioEvents = new GestioEvents();
        $this->gestioResultats = new GestioResultats();
        $this->resultats = new Resultats();
    }

    public function processOlympicData($athletesData, $eventsData, $resultsData){
        $this->gestioAtletes->processAthletes($athletesData);
        $this->gestioEvents->processEvents($eventsData);
        $this->gestioResultats->processResults($resultsData);
    }

    public function mostrarResultats(){
        $this->resultats->mostrarResultats($this->gestioEvents->getEvents(),
                                            $this->gestioResultats->getResults(),
                                            $this->gestioAtletes);
    }

}

?>