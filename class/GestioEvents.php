<?php

class GestioEvents{
    private array $events = [];

    public function afegirEvent($event, $date){
        $this->events[]= ['event' => $event, 'date' => $date];
    }

    public function getEvents(){
        return $this->events;
    }

    public function processEvents($eventsData){
        foreach($eventsData as $event){
            $this->afegirEvent($event['event'], $event['date']);
        }
    }
}

?>