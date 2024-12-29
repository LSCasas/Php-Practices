<!DOCTYPE html>
<html lang="en">
<head>
    <title>Larecast</title>
</head>
<body>
    <h1> 
        <?= $business['name']; ?>
    </h1>

    <ul>
        <?php foreach ($business['categories'] as $category) : ?>
            <li><?= $category; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>