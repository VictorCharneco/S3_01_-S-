<?php

class GestioResultats{
    private array $results = [];

    public function afegirResultat($athlete, $event, $medal){
        $this->results[]=['athlete' => $athlete, 'event'=> $event, 'medal'=> $medal];
    }
    
    public function getResults(){
        return $this->results;
    }

    public function processResults($resultsData){
        foreach($resultsData as $result){
            $this->afegirResultat($result['athlete'], $result ['event'], $result['medal']);
        }
    }
}

?>