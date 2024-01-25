<?php

/**
 * Classe che rappresenta un film.
 */
class Movie {
    /** @var string Titolo del film. */
    private $title;

    /** @var string Genere del film. */
    private $genre;

    /** @var int Anno di uscita del film. */
    private $releaseYear;

    /** @var int Durata del film in minuti. */
    private $duration;

    /**
     * Costruttore della classe Movie.
     *
     * @param string $title      Titolo del film.
     * @param string $genre      Genere del film.
     * @param int    $releaseYear Anno di uscita del film.
     * @param int    $duration   Durata del film in minuti.
     */
    public function __construct($title, $genre, $releaseYear, $duration) {
        $this->title = $title;
        $this->genre = $genre;
        $this->releaseYear = $releaseYear;
        $this->duration = $duration;
    }

    /**
     * Metodo per ottenere informazioni sul film.
     *
     * @return string Informazioni sul film.
     */
    public function getMovieInfo() {
        return "Titolo: $this->title, Genere: $this->genre, Anno di uscita: $this->releaseYear, Durata: $this->duration min";
    }
}

// Creare due oggetti Movie
$movie1 = new Movie("Inception", "Sci-Fi", 2010, 148);
$movie2 = new Movie("The Shawshank Redemption", "Drama", 1994, 142);

// Stampare a schermo le informazioni sui film
echo "Film 1: " . $movie1->getMovieInfo() . "<br>";
echo "Film 2: " . $movie2->getMovieInfo();
?>
