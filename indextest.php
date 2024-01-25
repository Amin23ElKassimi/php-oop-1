<?php



// Creare due oggetti Movie
$movie1 = new Movie("Inception", "Sci-Fi", 2010, 148);
$movie2 = new Movie("The Shawshank Redemption", "Drama", 1994, 142);

// Stampare a schermo le informazioni sui film
echo "Film 1: " . $movie1->getMovieInfo() . "<br>";
echo "Film 2: " . $movie2->getMovieInfo();
?>
