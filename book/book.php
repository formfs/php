<?php
error_reporting(E_ALL);
require __DIR__ . '/data/books_array.php';
// require './data/books_array.php';

//https://www.php.net/manual/en/language.constants.magic.php
//echo __DIR__;

// function filterByAuthor($books, $author)
// {
//     $filteredBooks = [];
//     foreach ($books as $book):
//         if ($book['author'] === $author):
//             $filteredBooks[] = $book;
//         endif;
//     endforeach;
//     return $filteredBooks;
// }

function filterByAuthor($books, $author)
{
    return array_filter($books, fn($book) => $book['author'] === $author);
}

function filterByName($books, $name)
{
    // return array_filter($books, fn($book) => $book['name'] === $name);
    return array_filter($books, function($book) use ($name) {
        return $book['name'] === $name;
    });
}


$zolaBook = filterByAuthor($books, 'Emile Zola');
// var_dump($zolaBook);
// die();

$capitalBook = filterByName($books, 'Le capital');

$booksView = $capitalBook;

require 'book.view.php';
// include 'book.view.php';
