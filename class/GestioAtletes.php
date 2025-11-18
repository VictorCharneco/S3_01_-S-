<?php

class GestioAtletes{
    private array $athletes = [];

    public function afegirAtleta($name, $country){
        $this->athletes[] = ['name' => $name, 'country' => $country];
    }

    public function getAthletes(){
        return $this->athletes;
    }

    public function getCountry($athleteName){
        foreach($this->athletes as $athlete){
            if($athlete['name'] === $athleteName){
                return $athlete['country'];
            }
        }
        return "No s'ha trobat";
    }

    public function processAthletes($athletesData){
        foreach($athletesData as $athlete){
            $this->afegirAtleta($athlete['name'], $athlete['country']);
        }
    }
}

?>