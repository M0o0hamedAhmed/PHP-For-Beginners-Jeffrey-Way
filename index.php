<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Your First PHP Tag Assignment</title>
</head>
<body>
<h1>Recommended Book</h1>
        <?php
                $books = [
                    "First Book",
                    "Second Book",
                    "Third Book",
                ];
        ?>


    <ul>
        <?php foreach ($books as $book) : ?>
            <li> <?= $book ?>  </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>