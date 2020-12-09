<?php
session_start();

require_once "config.php";

$ctime=microtime(true);
$new_status=$_SESSION["status"];
$status=$_SESSION["status"];
$nr_review=$_SESSION["nr_review"];
$nr_aprecieri=$_SESSION['nr_aprecieri'];
$nr_penalizari=$_SESSION['nr_penalizari'];
$min_aprec=$_SESSION['min_aprec'];
$nr_comentarii=$_SESSION['nr_comentarii'];
$data_inregistrare=$_SESSION['data_inregistrare'];

if(($status=="Expert" || $status=="Avansat" || $status=="Adept"  ||  $status=="Recrut") && $nr_review>=10  &&   $nr_aprecieri>=1000 && $nr_penalizari==0)
    $new_status="Master";

    else if(($status=="Avansat" || $status=="Adept"  ||  $status=="Recrut")  &&  $nr_review>=5  && $nr_aprecieri>=10)
        $new_status="Expert";

        else if(($status=="Adept"  ||  $status=="Recrut")  &&  $nr_aprecieri>=50    && $min_aprec>=5 )
            $new_status="Avansat";

            else if($status=="Recrut"   &&  $nr_comentarii>=5)
                $new_status="Adept";
if($new_status!=$status)
{
    $sql = "UPDATE users SET status = ? WHERE id = ?";
    if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "si", $param_status, $param_id);
            $param_status = $new_status;
            $param_id = $_SESSION["id"];
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
    }
    mysqli_close($link);
}
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
        <a>Review-urile mele</a>
    </div>
</div>
<div class="main">
    <h1 id="Title">Profil</h1>
    <a>Numele de utilizator este <?php echo $_SESSION['username'];?> si aveti titlul de <?php echo $new_status;?></a>
    <a href="logout.php" style="float:right;">Logout</a>
    <a href="reset-password.php">Resetare parola</a>
    <a href="reset-username.php">Resetare username</a>
    <a href="delete.php">Stergere cont<a>
</div>
</body>
</html>
