<?php
session_start();
$user_id = $_SESSION['user_id'];
?>
<?php
if($_GET['user_id']  && $_GET['username']){
	if($_GET['userid']!=$user_id){
		$follow_userid = $_GET['userid'];
		$follow_username = $_GET['username'];
		include 'config.php';
		$query = mysqli_query($link,"SELECT id
							   FROM following
							   WHERE user1_id='$user_id' AND user2_id='$follow_userid'
							  ");
		mysql_close($link);
		if(!(mysql_num_rows($query)>=1)){
			include 'config.php';
			mysqli_query($conn,"INSERT INTO following(user1_id, user2_id)
						 VALUES ('$user_id', '$follow_userid')
						");
			mysqli_query($conn,"UPDATE users
						 SET following = following + 1
						 WHERE id='$user_id'
						");
			mysqli_query($conn,"UPDATE users
						 SET followers = followers + 1
						 WHERE id='$follow_userid'
						");
			mysqli_close($link);
		}
		header("Location: ./".$follow_username);
	}
}
?>