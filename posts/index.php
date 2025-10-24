<?php
require __DIR__ . '/data/posts_array.php';

function filterPublished($posts, $publishedParam)
{
    return array_filter($posts, fn($post) => $post['published'] === $publishedParam);
}

$isPublishedArrayPosts = filterPublished($posts, true);

$totalPosts = count($posts);
$totalPostsPublished = count($isPublishedArrayPosts);

require 'post.view.php';

?>