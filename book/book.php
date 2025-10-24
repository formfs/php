<?php
require __DIR__.'/data/books_array.php';
// require './data/books_array.php';

//https://www.php.net/manual/en/language.constants.magic.php
//echo __DIR__;

    function filterByAuthor($books, $author)
    {
        $filteredBooks = [];
        foreach ($books as $book):
            if ($book['author'] === $author):
                $filteredBooks[] = $book;
            endif;
        endforeach;
        return $filteredBooks;
    }

    $zolaBook = filterByAuthor($books, 'Emile Zola');

    //var_dump($zolaBook);
    require 'book.view.php';
    // include 'book.view.php';

?>

