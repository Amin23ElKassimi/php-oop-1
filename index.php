<!-- 
crea un file index.php in cui: è definita una classe ‘Movie’, 
all'interno della classe sono dichiarate delle variabili d'istanza, 
all'interno della classe è definito un costruttore, 
all'interno della classe è definito almeno un metodo
vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà (vietato usare var_dump) -->


<?php
// Import delle classi da usare
include_once __DIR__ . '/Models/Category.php';
include_once __DIR__ . '/Models/Movie.php';

//Argomentare le nueve istanze di Categorie 
$vintageElectronicsCat = new Category('Vintage Electronics', 'Dispositivi elettronici vintage', 'https://cdnmetv.metv.com/XgGp6-1652303066-1697-lists-untitled_design_%283%29.jpg');
$wearables = new Category('Wearables', 'Dispositivi indossabili inutili', 'https://i0.wp.com/circuitcellar.com/wp-content/uploads/2022/12/385-Al-SF-Lead.jpg?fit=1258%2C921&ssl=1');


// Argomentare le nueve istanze di Prodotti
// Creare due oggetti Movie
$movie1 = new Movie("Inception", $vintageElectronicsCat, 2010, 148);
$movie2 = new Movie("The Shawshank Redemption", $wearables, 1994, 142);
// Array Di prodotti
$movies = [ $movie1, $movie2, $movie1, $movie2];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Netflix</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <header class="container">
        <div class="row text-center mb-3 p-3">
            <div class="col-12">
                <h1>
                    PHP Object Oriented Programming
                </h1>
            </div>
        </div>
    </header>
    <main class="container">
        <section class="row">
            <!-- Ciclo For che scrolla l'array usata come libreria film -->
            <?php foreach ($movies as $movie) { ?>
                <div class="col-3">
                    <div class="card">
                        <img src="<?php echo $movie->genre->imageUrl; ?>" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo $movie->description; ?>
                            </h5>
                            <h6 class="card-subtitle">
                                <?php echo $movie->category->name; ?>
                            </h6>
                            <p class="card-text">
                                <?php echo $movie->description; ?>
                            </p>
                            <a href="#" class="btn btn-primary">
                                Acquista per soli <?php echo $movie->getPrice(); ?>&euro;
                            </a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </section>
    </main>
</body>
</html>

