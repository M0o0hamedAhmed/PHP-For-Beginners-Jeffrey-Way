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

function filter($movies, $releaseYear)
{
    $filteredMovies = [];
    foreach ($movies as $movie) {
        if ($movie['releaseYear'] >= 2000) {
            $filteredMovies[] = $movie;
        }
    }
    return $filteredMovies;
}

?>

<?php foreach (filter($movies, 2000) as $movie) : ?>
    <li> <?= $movie['name'] ?>  </li>
<?php endforeach; ?>

</body>
</html>