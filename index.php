<?php

/* ● Creazione di una classe ‘Movie’
● Dichiarazione delle proprietà della classe
● Dichiarazione del costruttore
● Dichiarazione di almeno un metodo.
● Fare poi degli esempi di utilizzo della classe istanziando almeno due oggetti e stampando a schermo il
valore delle proprietà.*/

class Movie{
    private $title;
    public $duration;
    public $genre;
    public $actor;
    public $language;

    public function __construct($_titolo){
        $this->title = $_titolo;
    }

    //metodo
    public function lingua($_lingua){
        if($_lingua == 'eng'){
            return $this->title;
        }

    }
}

// prima istanza 
$nameMovie = new Movie('Batman v Superman');
$nameMovie->genre = 'fantasy';
echo $nameMovie->genre;
echo $nameMovie->lingua('eng');

// seconda istanza
$nameMovie2 = new Movie('Godzilla v Kong');
$nameMovie2->duration = '2 ore';
echo $nameMovie2->lingua('eng');
echo $nameMovie2->duration;