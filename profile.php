<?php
session_start();
?>
<!doctype html>
<html lang="ro">
<head>
    <title>Profile</title>
    <link rel="stylesheet" type="text/css" href="Proiect.css">
    <meta name="viewport" content="width=device-width, initial scale=1.0">

</head>
<body>
<div class="dropdown">
    <button class="dropbtn">Meniu</button>
    <div class="dropdown-content">
        <a href="proj.php">Acasa</a>
        <a>Top cele mai bune jocuri ale tuturor timpurilor</a>
        <a>Forum</a>
        <a>News</a>
        <a href="login.php">Profil</a>
        <a>Review-urile mele</a>
    </div>
</div>

<div class="main">
    <h1 id="Title">Profil</h1>
    <a>Numele de utilizator este <?php echo $_SESSION['username'];?></a>
    <hr>
    <a href="logout.php" style="float:right;">Logout</a>
    <a href="reset-password.php">Resetare parola</a>
    <a href="reset-username.php">Resetare username</a>
</div>

</body>
</html>
