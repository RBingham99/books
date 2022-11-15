<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Books</title>

</head>

<body>

<h1>All DVDs</h1>

<ul>
    <?php
    foreach ($dvds as $dvd) {
        echo '<li>' . $dvd['title'] . '</li>';
    }
    ?>
</ul>

</body>

</html>