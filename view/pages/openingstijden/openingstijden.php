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
    <title>Openingstijden - Scissor magic</title>
    <link href="style.css" rel="stylesheet">
    <link href="../../style/tablestyle.css" rel="stylesheet">

</head>
<body>
<header>
    <a href="../../index.php"><img src="../../../content/img/scissor-magic-logo.jpg" alt="Logo" </a>
    <nav>
        <ul>
            <li><a href="../../index.php">Home</a></li>
            <li><a href="../salons/salons.php">Salons</a> </li>
            <li><a href="../producten/producten.php">Producten</a> </li>
            <li><a href="openingstijden.php">Openingstijden</a> </li>
        </ul>
    </nav>
</header>
<main>
<div>
    <h2>Openingstijden</h2>
    <?php require '../../../content/elements/openingstijden_table.php' ?>
</div>
</main>
<footer>

</footer>
</body>
</html>
