<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Books</title>

</head>

<body>

<h1>Our books</h1>

<ul>
    <?php
    foreach ($books as $book) {
        echo '<li>' . $book['title'] . ' - ' . $book['author'] . '</li>';
    }
    ?>
</ul>

</body>

</html>