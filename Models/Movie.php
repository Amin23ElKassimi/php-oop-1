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
    public $imageUrl;
    

    /**
     * Costruttore della classe Movie. Usato come guida per i Prossimi Programmatori o x te stesso a mettere mano sulle funzioni dopo molto tempo.
     *
     * @param string $title      Titolo del film.
     * @param Category $genre      Genere del film.
     * @param int    $releaseYear Anno di uscita del film.
     * @param int    $duration   Durata del film in minuti.
     * @param float $_price The current price of the product
     * @param string|null $_imageUrl Movie
     */
    public function __construct(string $title,Category $genre,int $releaseYear,int $duration, float $price,string $_imageUrl = null) {
        $this->title = $title;
        $this->genre = $genre;
        $this->releaseYear = $releaseYear;
        $this->duration = $duration;
        $this->price = $price;
        $this->imageUrl = $_imageUrl;
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


// Argomentare le nueve istanze di Prodotti
// Creare due oggetti Movie
$inception = new Movie("Inception", $dramma, 2010, 148,4.99, 'https://images-na.ssl-images-amazon.com/images/S/pv-target-images/e826ebbcc692b4d19059d24125cf23699067ab621c979612fd0ca11ab42a65cb._RI_TTW_SX1080_FMjpg_.jpg');
$redemption = new Movie("The Shawshank Redemption", $azione, 1994, 142,12.50,'https://m.media-amazon.com/images/S/pv-target-images/d56b2942bc24e60043c79b061040c63d43ba529f0db1feff055e3b7a4dcc28ce.jpg');
$fastfurios = new Movie("Fast & Furios", $azione, 1994, 142,12.50,'https://m.media-amazon.com/images/S/pv-target-images/d56b2942bc24e60043c79b061040c63d43ba529f0db1feff055e3b7a4dcc28ce.jpg');
// $redemption = new Movie("The Shawshank Redemption", $azione, 1994, 142,12.50,'https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fcdn.collider.com%2Fwp-content%2Fuploads%2F2016%2F06%2Ffast-and-furious-cast-characters.jpg&f=1&nofb=1&ipt=c2b90c5907fc67b4398692781964f7ea9ebad8e4f0a499af7f8ddc669f525095&ipo=images');

