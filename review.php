<?php
session_start();
require_once "config.php";
function getTime($t_time){
	$pt = time() - $t_time;
	if ($pt>=86400)
		$p = date("F j, Y",$t_time);
	elseif ($pt>=3600)
		$p = (floor($pt/3600))."h";
	elseif ($pt>=60)
		$p = (floor($pt/60))."m";
	else
		$p = $pt."s";
	return $p;
}
$user_id = $_SESSION['user_id'];
$name=$name_err=$review=$review_err=$nota_err="";
$nota=0;
?>
<!doctype html>
<html lang="ro">
<head>
    <title>Proiect</title>
    <link rel="stylesheet" type="text/css" href="Proiect.css">
    <meta name="viewport" content="width=device-width, initial scale=1.0">

</head>
<body>
    <div class="main">
    <h1 id="Title">Review</h1>

     <form action="add.php " method="POST">
                <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                <label>Numele jocului:</label><br>
                <input type="text" name = "name" class="form-control" value="<?php echo $name; ?>">
                <span class="help-block"><?php echo $name_err; ?></span>
                </div>
                <div class="form-group <?php echo (!empty($review_err)) ? 'has-error' : ''; ?>">
                <label>Review:</label><br>
      			<textarea class="form-control" placeholder="Scrie aici review-ul" name="review" value="<?php echo $review;?>"></textarea><br>
                </div>
                <div class="form-group <?php echo (!empty($nota_err)) ? 'has-error' : ''; ?>">
      			<label>Nota:</label><br>
      			<input type="number" class="form-control" style='float:left; margin-top:3px;' name="nota" min="0" max="10" step="0.5" value="$nota">
                </div>
      			<input type="submit" class="btn btn-primary" value="Submit">
    </form>
    </div>
    <footer id="foot">
        <p>Visan Traian-Dimitrie grupa 231</p>
    </footer>
</body>
</html>