<?php
session_start();
include_once('functions.php');
$user_id=$_SESSION['user_id'];
?>
<!doctype html>
<html lang="ro">
<head>
    <title>Proiect</title>
    <link rel="stylesheet" type="text/css" href="Proiect.css">
    <meta name="viewport" content="width=device-width, initial scale=1.0">

</head>
<body>
    <div class="dropdown">
        <button class="dropbtn">Meniu</button>
        <div class="dropdown-content">
            <a href="proj.php">Acasa</a>
            <a href="tprev.php">Top jocuri</a>
            <a href="login.php">Profil</a>
        </div>
    </div>
    <div class="main">
    <h1 id="Title">Forum</h1>
    <?php
        include "fdashboard.php";

      ?>
    </div>
    <footer id="foot">
        <p>Visan Traian-Dimitrie grupa 231</p>
    </footer>
</body>
</html>