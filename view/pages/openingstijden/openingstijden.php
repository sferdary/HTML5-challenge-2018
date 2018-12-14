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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Openingstijden - Scissor magic</title>
    <link href="../../style/style.css" rel="stylesheet">
    <link href="../../style/openingstijden.css" rel="stylesheet">
    <link href="../../style/tablestyle.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,700" rel="stylesheet">
</head>
<body>
<header>
    <a href="../../index.php"><img id="logo"src="../../../content/img/scissor-magic-logo.jpg" alt="Logo" </a>
    <nav>
        <ul>
            <li><a href="../../index.php">Home</a></li>
            <li><a href="../producten/producten.php">Producten</a> </li>
            <li><a href="../salons/salons.php">Salons</a> </li>
            <li><a href="openingstijden.php">Openingstijden</a> </li>
        </ul>
    </nav>
</header>
<main>
<div id="openingstijden">
    <h2>Openingstijden</h2>
    <?php require '../../../content/elements/desktop/openingstijden_table.php' ?>
</div>
</main>
<footer>

</footer>
</body>
</html>
