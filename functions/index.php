<!DOCTYPE html>
<html lang="en">
<head>
    <title>Associative Arrays</title>
</head>
<body>
<?php 
$books = [
    [
        'name' => "Doris",
        'author' => 'Philip K',
        'URL' => 'https://example.com',
        'releaseYear' => 2010
    ],
    [
        'name' => "Belen",
        'author' => 'Brenda K',
        'URL' => 'https://example.com',
        'releaseYear' => 2010
    ],
    [
        'name' => "Alan el caido",
        'author' => 'Philip K',
        'URL' => 'https://example.com',
        'releaseYear' => 2010
    ],
];

function filterByAuthor($books, $author){
    $filteredBooks = [];

    foreach ($books as $book) {
        if($book['author'] === $author) {
            $filteredBooks[] = $book;
        }
    }
    return $filteredBooks;
}
?>

<ul>
    <?php foreach (filterByAuthor($books, 'Philip K') as $book) : ?>
        <li>
            <a href="<?= $book['URL']; ?>">
                <?= $book['name']; ?> (<?= $book['releaseYear']; ?>)
                <?= $book['author']; ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>



</body>
</html>
