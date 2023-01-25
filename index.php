<?php 

class Movie {
    private $title;
    private $year;
    private $director;
    private $rating;
    private $genres;

    public function __construct($title, $year, $director, $rating, $genres) {
        $this->title = $title;
        $this->year = $year;
        $this->director = $director;
        $this->rating = $rating;
        $this->genres = $genres;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getYear() {
        return $this->year;
    }

    public function setYear($year) {
        $this->year = $year;
    }

    public function getDirector() {
        return $this->director;
    }

    public function setDirector($director) {
        $this->director = $director;
    }

    public function getRating() {
        return $this->rating;
    }

    public function setRating($rating) {
        $this->rating = $rating;
    }

    public function getGenres() {
        return $this->genres;
    }

    public function setGenres($genres) {
        $this->genres = $genres;
    }
    public function getMovieData() {
        $data = "Title: " . $this->getTitle() . "\nYear: " . $this->getYear() . "\nDirector: " . $this->getDirector() . "\nRating: " . $this->getRating() . "\nGenres: ";
        foreach($this->getGenres() as $genre) {
            $data .= $genre . ",";
        }
        return $data;
    }
}



require_once 'db.php';

echo "<ul>";
foreach ($movies as $movie) {
    echo "<li>".$movie->getMovieData()."</li>";
}
echo "</ul>";
