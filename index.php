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

<h1>Recommended Book</h1>
<?php
$books = [
    [
        "name" => "First Book",
        "author" => "Mohamed",
        "purchaseUrl" => "https://example.com",
        "releaseYear" => 2002
    ],
    [
        "name" => "Second Book",
        "author" => "Ahmed",
        "purchaseUrl" => "https://example.com",
        "releaseYear" => 2000
    ],
    [
        "name" => "Third Book",
        "author" => "Ali",
        "purchaseUrl" => "https://example.com",
        "releaseYear" => 2004
    ]
];

function filterByAuthor($books, $author)
{
    $filteredBooks = [];
    foreach ($books as $book) {
        if (strtolower($book['author']) === strtolower($author)) {
            $filteredBooks[] = $book;
        }
    }
    return $filteredBooks;
}



?>

<?php foreach (filterByAuthor($books, 'Ahmed') as $book) : ?>
    <li>  <?= $book["name"] . " - " . $book["releaseYear"]; ?> </li>
<?php endforeach; ?>

</body>
</html>