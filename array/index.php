<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Array</title>
</head>
<body>
    <h1> 
Recommended Books
    </h1>


<?php  
$books = [
"Book1", "Book2", "Book3"
];
?>

<ul>
<?php foreach ($books as $book){
echo "<li>$book</li>";
echo "<li>{$book}tm</li>";
}
?>
</ul>

</body>
</html>