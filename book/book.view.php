<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View book</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <ul>
        <?php foreach ($booksView as $book): ?>
            <? //php if ($book['author'] === 'Emile Zola'): 
            ?>
            <li>
                <p><?= $book['name'] ?> écrit par <?= $book['author'] ?></p>
                <p><a href="<?= $book['achatUrl'] ?>">Achetez ce livre</a></p>
            </li>
            <? //php endif 
            ?>
        <?php endforeach ?>
    </ul>
</body>

</html>