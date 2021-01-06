<?php
session_start();
$user_id = $_SESSION['user_id'];
if($user_id){
	if($_POST['tweet']!=""){
		$tweet = htmlentities($_POST['tweet']);
		$timestamp = time();
		include 'config.php';
		$query = mysqli_query($link,"SELECT username
					 		  FROM users
				     		  WHERE id ='$user_id'
				    		");
		$row = mysqli_fetch_assoc($query);
		$username = $row['username'];
		mysqli_query($link,"INSERT INTO tweets(username, user_id, tweet, timestamp)
				     VALUES ('$username', '$user_id', '$tweet', $timestamp)
				    ");
		mysqli_query($link,"UPDATE users
					 SET tweets = tweets + 1
					 WHERE id='$user_id'
					");
		mysqli_close($link);
		header("Location: profile.php");
	}
}
?>