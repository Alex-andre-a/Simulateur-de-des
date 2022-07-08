<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>simulateur 8 faces</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+P+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php include "header.php"; ?>
    
    <main>
        <p>
            <img src="assets/8-faces/<?php echo rand(1, 8); ?>.png" alt="">
        </p>

        <a href="8-faces.php">A vous de jouer !</a>
    </main>

    <?php include "footer.php"; ?>
    
</body>
</html>