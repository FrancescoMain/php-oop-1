<?php

class Movie {

    public $title;
    public array $genres;
    public $lang;

    public function __construct ($title,array $genres, $lang) {
        $this -> title = $title;
        $this -> genres = $genres;
        $this -> lang = $lang;
        

    }

    public function getAllGenre(){

        foreach ($this -> genres as $genre){
            $str = "";
            $str.= $genre;
        }
        return $str;
    }

    public function getFullName() {

        return $this -> title
        . " - " . $this -> genres 
        . " (" . $this -> lang . ")";
    }
}

class Genre {
    public $name;

    public function __construct ($name) {
        $this -> name = $name;
    }
}

$fantasy = new Genre("fantasy");
$romantico = new Genre("romantico");

$genres = [$fantasy, $romantico];

$harrypotter = new Movie ("harry potter" , $genres  , "italiano");

$batteman = new Movie ("batteman" , $genres , "romano");
$movies = [$harrypotter,$batteman];

foreach ($movies as $movie) {
    echo "<br>";
    echo $movie -> getFullName();
}

