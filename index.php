<?php

class Movie {

    public $title;
    public $genre;
    public $lang;

    public function __construct ($title, $genre, $lang) {
        $this -> title = $title;
        $this -> genre = $genre;
        $this -> lang = $lang;
        

    }

    public function getFullName() {

        return $this -> title
        . " - " . $this -> genre 
        . " (" . $this -> lang . ")";
    }
}

$movie1 = new Movie ("harry potter" , "fantasy" , "italiano");
$movie2 = new Movie ("batteman" , "drammatico" , "romano");

