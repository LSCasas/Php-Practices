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
        'URL' => 'https://example.com'
    ],
    [
        'name' => "Belen",
        'author' => 'Brenda K',
        'URL' => 'https://example.com'
    ]
];


$books[0]['releaseYear'] = 1970; 
$books[1]['releaseYear'] = 1985;  
?>

<ul>
    <?php foreach ($books as $book) : ?>
        <li>
            <a href="<?= $book['URL']; ?>">
                <?= $book['name']; ?> (<?= $book['releaseYear']; ?>)
            </a>
        </li>
    <?php endforeach; ?>
</ul>
</body>
</html>
