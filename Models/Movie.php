<?php
/**
 * Classe che rappresenta un film.
 */
class Movie {
    
    public $title;
    public $genre;
    public $releaseYear;
    public $duration;
    public $price;
    

    /**
     * Costruttore della classe Movie. Usato come guida per i Prossimi Programmatori o x te stesso a mettere mano sulle funzioni dopo molto tempo.
     *
     * @param string $title      Titolo del film.
     * @param Category $genre      Genere del film.
     * @param int    $releaseYear Anno di uscita del film.
     * @param int    $duration   Durata del film in minuti.
     * @param float $_price The current price of the product
     */
    public function __construct(string $title,Category $genre,int $releaseYear,int $duration, float $price) {
        $this->title = $title;
        $this->genre = $genre;
        $this->releaseYear = $releaseYear;
        $this->duration = $duration;
        $this->price = $price;
    }

    
    public function getPrice(){
        return $this->price;
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