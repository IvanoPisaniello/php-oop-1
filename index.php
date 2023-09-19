<?php
include_once __DIR__ . '/movie.php';
$movies = [
    new Movie('Inglorious Basterds', 'Thriller', '02/10/2009', 'Inglourious Basterds Is WWII drama with a revenge mission and memorable performances.'),
    new Movie('Lo chiamavano trinità', 'Western', '12/12/1970', 'Lo chiamavano Trinità è un western italiano famoso per l\'umorismo e la coppia di fratelli Terence Hill e Bud Spencer.'),
    new Movie('Pirate of Carribean: The Curse of the Black Pearl', 'Fantasy', '09/07/2023', 'Pirates of the Caribbean: The Curse of the Black Pearl" is an adventure film featuring Captain Jack Sparrow\'s quest for cursed treasure.'),
    new Movie('Harry Potter And The Philosophers Stone', 'Fantasy', '20/12/2001', 'Harry Potter and the Philosopher\'s Stone is a fantasy film that introduces us to the magical world of Hogwarts and the young wizard Harry Potter.'),
];



// var_dump($movie1);
// echo $movie1?->getFullInfoMovie();
// var_dump($movie2);
// echo $movie2?->getFullInfoMovie();
// var_dump($movie3);
// echo $movie3?->getFullInfoMovie();
// var_dump($movie4);
// echo $movie4?->getFullInfoMovie();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container d-flex gap-2 mt-5">
        <?php
        foreach ($movies as $movie) {
        ?>
            <div class="card" style="width: 18rem;">
                <div class="card-body text-center">
                    <h5 class="card-title"><?php echo $movie->getFullInfoMovie() ?></h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">Descrizione:</h6>
                    <p class="card-text"><?php echo $movie->description ?></p>
                </div>
            </div>
        <?php
        }
        ?>
    </div>

</body>

</html>