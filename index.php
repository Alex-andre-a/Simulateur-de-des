<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>simulateur de dés</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="titre">
            <h1>Le Sloubi</h1>
        </div>
        <div class="menus">
            <a href="">Dé à 6 faces</a>
            <a href="">Dé à 8 faces</a>
            <a href="">Dé à 10 faces</a>
            <a href="">Dé à 12 faces</a>
        </div>
    </header>
    <main>

        <p>
            <img src="/assets/6-faces/<?php echo rand(1, 6); ?>.png" alt="">
        </p>

        <a href="index.php">A vous de jouer !</a>

    </main>

    
</body>
</html>