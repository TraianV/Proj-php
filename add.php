<?php
session_start();
$user_id = $_SESSION['user_id'];
$name=$_POST['name'];
$review=$_POST['review'];
$nota=$_POST['nota'];

if($user_id){
	if($_POST['review']!=""){
		$tweet = htmlentities($_POST['review']);
		$timestamp = time();
		include 'config.php';
		$query = mysqli_query($link,"SELECT id
                 					 		  FROM games
                 				     		  WHERE name ='$name'
                 				    		");
        $row=mysqli_fetch_assoc($query);
        $game_id = $row['id'];
        mysqli_close($link);
        include 'config.php';
		$query = mysqli_query($link,"SELECT username
					 		  FROM users
				     		  WHERE id ='$user_id'
				    		");
		$row = mysqli_fetch_assoc($query);
		$username = $row['username'];
		mysqli_query($link,"INSERT INTO reviews(username, user_id, review, timestamp, nota, game_id)
				     VALUES ('$username', '$user_id', '$review', $timestamp, $nota,$game_id)
				    ");
		mysqli_query($link,"UPDATE users
					 SET nr_review = nr_review + 1
					 WHERE id='$user_id'
					");
	    mysqli_query($link,"UPDATE games
        			    SET nrrev = nrrev + 1
                        WHERE id='$game_id'
        				");
        mysqli_query($link,"UPDATE games
                			    SET sumpcte = sumpcte + '$nota'
                                WHERE id='$game_id'
                				");
		mysqli_close($link);
		header("Location: profile.php");
	}
}
?>