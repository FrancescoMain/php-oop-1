<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php 
    require_once 'models/movie.php';
    require_once 'db.php';
    ?>
</head>
<body>
    <h1>MOVIES</h1>
<?php 
    echo "<ul>";
    foreach ($movies as $movie) {
        echo "<li>".$movie->getMovieData()."</li>";
    }
    echo "</ul>";
    ?>  
</body>
</html>


