<?php

class Task 
{
    public $id;                 // Proprieta/istanze delle classi = variabili che vengono dichiarate all'interno della classe.
    public $taskName;
    public $status;
    public $expirationDate;
    
    public function isExpired():bool // fun per chiamare funzione per istanza, mi aspetto che restituisca un valore booleano.
    {
        // $today è un istanza della classe DataTime
        $today = new DateTime();  // data di oggi
        $task = new DateTime ($this->expirationDate); // data di scadenza di questa task, viene confrontata con la data di oggi.

        return $task > $today;   // restituisce un valore booleano (true o false)

        // gettype($today) // viene restituito Object.
        // get_class($today) // viene restituito DateTime.
    }

    public function getExpirationDate()
    {
        return $this -> expirationDate; 
    }






}