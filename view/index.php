<?php
/**
 * Created by PhpStorm.
 * User: S. Ferdary
 * Date: 14/12/2018
 * Time: 07:44
 */
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Scissor magic</title>
    <link href="style.css" rel="stylesheet">
    <link href="style/tablestyle.css" rel="stylesheet">

</head>
<body>
<header>
    <a href="index.php"><img src="../content/img/scissor-magic-logo.jpg" alt="Logo" </a>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="pages/salons/salons.php">Salons</a></li>
            <li><a href="pages/producten/producten.php">Producten</a></li>
            <li><a href="pages/openingstijden/openingstijden.php">Openingstijden</a></li>
        </ul>
    </nav>
</header>
<main>
    <div>
        <?php require '../content/elements/prijzen_table.php'; ?>
    </div>
    <div>
        <h3>Onze specialiteiten</h3>
        <a href=""><img src="../content/img/dreadlocks/300x300/wiz_khalifa300x300.jpg" alt="bleached_rasta" </a>
        <a href=""><img src="../content/img/dreadlocks/300x300/maxresdefault02-300x300.jpg" alt="woman_rasta" </a>
        <a href=""><img src="../content/img/dreadlocks/300x300/rainbowtwins300x300.jpg" alt="rainbow_rasta" </a>
    </div>
</main>
<footer>

</footer>
</body>
</html>
