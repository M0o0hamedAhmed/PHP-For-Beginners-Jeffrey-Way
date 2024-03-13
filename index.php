<?php $title = "Top Performing Users"; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
</head>
<body>

<h1>My favorites movies</h1>
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

//$filteredMovies = filter($movies, function ($movie) {
//    return $movie['releaseYear'] >= 2003;
//});

$filteredMovies = array_filter($movies, function ($movie) {
    return $movie['releaseYear'] >= 2003;
});

?>

<?php foreach ($filteredMovies as $movie) : ?>
    <li> <?= $movie['name'] ?>  </li>
<?php endforeach; ?>

</body>
</html>