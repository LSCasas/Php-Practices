<!DOCTYPE html>
<html lang="en">
<head>
    <title>Conditionals</title>
</head>
<body>
<?php
$name = "Dark Matter";
$read = false;

if ($read) {
    $message = "You have read $name";
} else {
    $message = "You have NOT read $name";
}
?>
<h1>
    <?php echo $message; ?>
    <?= $message; ?>
</h1>
</body>
</html>