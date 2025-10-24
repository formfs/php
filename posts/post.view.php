<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts View</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <main>
        <section>
            <p><?= $totalPostsPublished ?> sur <?= $totalPosts ?> publiés.</p>
            <?php foreach ($isPublishedArrayPosts as $post): ?>
                <article>
                    <p><?= $post['title'] ?> <br>
                        écrit par <?= $post['author']['name'] ?> - <?= $post['author']['role'] ?></p>
                    <p><strong>Tags:</strong> <?= implode(', ', $post['tags']) ?> </p>
                    <p>Commentaires :</p>
                    <ul>
                        <?php foreach ($post['comments'] as $comment): ?>
                            <li><?= $comment['user'] . ': ' . $comment['message'] ?></li>
                        <?php endforeach; ?>
                    </ul>
                </article>
            <?php endforeach ?>
        </section>
    </main>
</body>

</html>