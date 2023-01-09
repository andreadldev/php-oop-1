<?php 
class Movie {
    public $name;
    public $director;
    public $year;
    public $isBefore2000;
    public $genre;

    public function __construct($_name, $_director, $_year, $_genre) 
    {
        $this->name = $_name;
        $this->director = $_director;
        $this->year = $_year;
        $this->genre = $_genre;
    }

    public function isBefore2000() {
        if ($this->year < 2000) {
            $this->isBefore2000 = true;
        }
        else {
            $this->isBefore2000 = false;
        }
    }
}

$movie_1 = new Movie("Fargo", "Coen Brothers", 1996, "Crime Drama");
$movie_1->isBefore2000();
var_dump($movie_1);

$movie_2 = new Movie("The Big Lebowski", "Coen Brothers", 1998, "Comedy");
$movie_2->isBefore2000();
var_dump($movie_2);

$movie_3 = new Movie("No Country for Old Men", "Coen Brothers", 2007, "Thriller");
$movie_3->isBefore2000();
var_dump($movie_3);
?>