<?php require 'header.php'; ?>
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
<?php require 'footer.php'; ?>