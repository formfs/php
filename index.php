<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>PHP</h1>
    <?php
//phpinfo();
/* Commentaire 
mulitigne
*/

// echo "Bonjour" . " à toi !";

// $variable = "Bonjour";
// echo $variable . " à toi!";
// echo $variable . " " . "à toi!";
// echo "$variable à toi";
// echo '$variable à toi';

// $price1 = 20.99;
// $price2 = "18.99";
// $price3 = (int) $price2;

// var_dump($price1);
// echo "<br>";
// var_dump($price2);
// echo "<br>";
// var_dump($price3);
// print_r();

// $result = "13" + 10;
// $result = 10 . " pommes";
// var_dump($result);

// $read = true;
// $book = "La peste";
// // if ("lu") {
// if ($read) {
//     $message = "Vous avez lu $book.";
// } else {
//     $message = "Vous n'avez pas lu $book.";
// }
// echo $message;

$books = [
    "La peste",
    "La bible",
    "Le capital"
];

echo "<pre>";
var_dump($books[1]);
echo "<hr>";
print_r($books[2]);
echo "</pre>";

// foreach ($books as $book) {
//     echo $book;
// }
    ?>
<?//= $message?> 

<ul>
    <?php foreach ($books as $book) { ?>
        <li><?= $book ?></li>
        <!-- <li><?php //echo $book ?></li> -->
    <?php } ?>
</ul>


</body>
</html>