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

$harrypotter = new Movie ("harry potter" , "fantasy" , "italiano");
$batteman = new Movie ("batteman" , "drammatico" , "romano");
$movies = [$harrypotter,$batteman];

foreach ($movies as $movie) {
    echo "<br>";
    echo $movie -> getFullName();
}

