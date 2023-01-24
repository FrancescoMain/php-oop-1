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


}



