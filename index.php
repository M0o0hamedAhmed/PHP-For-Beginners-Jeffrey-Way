
<?php
$movies = [
    [
        "name" => "First Movie",
        "author" => "Mohamed",
        "purchaseUrl" => "https://example.com",
        "releaseYear" => 2002
    ],
    [
        "name" => "Second Movie",
        "author" => "Ahmed",
        "purchaseUrl" => "https://example.com",
        "releaseYear" => 1999
    ],
    [
        "name" => "Third Movie",
        "author" => "Ali",
        "purchaseUrl" => "https://example.com",
        "releaseYear" => 2004
    ], [
        "name" => "First Movie",
        "author" => "Mohamed",
        "purchaseUrl" => "https://example.com",
        "releaseYear" => 2002
    ],
    [
        "name" => "Second Movie",
        "author" => "Ahmed",
        "purchaseUrl" => "https://example.com",
        "releaseYear" => 1940
    ],
    [
        "name" => "Third Movie",
        "author" => "Ali",
        "purchaseUrl" => "https://example.com",
        "releaseYear" => 2024
    ]
];

function filter($movies, $fn)
{
    $filteredMovies = [];
    foreach ($movies as $movie) {
        if ($fn($movie)) {
            $filteredMovies[] = $movie;
        }
    }
    return $filteredMovies;
}

$filteredMovies = filter($movies, function ($movie) {
    return   $movie['releaseYear'] >= 1950  && $movie['releaseYear'] <= 2020;
});


require "index.view.php"

?>

