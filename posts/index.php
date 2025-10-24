<?php
require __DIR__ . '/data/posts_array.php';

function filterPublished($postsParam, $publishedParam)
{
    return array_filter($postsParam, fn($post) => $post['published'] === $publishedParam);
}

$isPublishedArrayPosts = filterPublished($posts, true);

$totalPosts = count($posts);
$totalPostsPublished = count($isPublishedArrayPosts);

require '../views/post.view.php';

?>