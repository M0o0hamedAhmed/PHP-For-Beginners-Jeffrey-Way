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
<h1><?= $business['name'] ?></h1>

<?php foreach ($business['categories'] as $category) : ?>
    <ul>

        <li> <?=  $category ?> </li>
    </ul>

<?php endforeach; ?>

</body>
</html>