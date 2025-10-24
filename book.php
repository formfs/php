<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>
</head>
<body>
    
<?php
$books = [
    [
        "name" => "La peste",
        "author" => "Emile Zola",
        "achatUrl" => "http://example.com/zola"
    ],
    [
        "name" => "La bible",
        "author" => "Jon Inconnu",
        "achatUrl" => "http://example.com/bible"
    ],
    [
        "name" => "Le capital",
        "author" => "Karl Marx",
        "achatUrl" => "http://example.com/marx"
    ]
];
?>

<ul>
    <?php foreach ($books as $book): ?>
        <li>
            <p><?=$book['name']?> écrit par <?= $book['author'] ?></p>
            <p><a href="<?=$book['achatUrl'] ?>">Achetez ce livre</a></p>
        </li>
    <?php endforeach ?>

</ul>


</body>
</html>