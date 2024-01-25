<?php
/**
 * Classe che rappresenta un film.
 */
class Movie {
    
    /** @var string Titolo del film. */
    public $title;

    /** @var string Genere del film. */
    public $genre;

    /** @var int Anno di uscita del film. */
    public $releaseYear;

    /** @var int Durata del film in minuti. */
    public $duration;

    /**
     * Costruttore della classe Movie. Usato come guida per i Prossimi Programmatori o x te stesso a mettere mano sulle funzioni dopo molto tempo.
     *
     * @param string $title      Titolo del film.
     * @param Category $genre      Genere del film.
     * @param int    $releaseYear Anno di uscita del film.
     * @param int    $duration   Durata del film in minuti.
     */
    public function __construct(string $title,Category $genre,int $releaseYear,int $duration) {
        $this->title = $title;
        $this->genre = $genre;
        $this->releaseYear = $releaseYear;
        $this->duration = $duration;
    }

    // /**
    //  * Metodo per ottenere informazioni sul film.
    //  *
    //  * @return string Informazioni sul film.
    //  */
    // public function getMovieInfo() {
    //     return "Titolo: $this->title, Genere: $this->genre, Anno di uscita: $this->releaseYear, Durata: $this->duration min";
    // }
}