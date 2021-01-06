<?php
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
		include "config.php";
		$tweets = mysqli_query($link,"SELECT username, tweet, timestamp
							   FROM tweets
							   ORDER BY timestamp DESC
							   LIMIT 0, 10
							  ");
		while($tweet = mysqli_fetch_array($tweets)){
			echo "<div class='well well-sm' style='padding-top:4px;padding-bottom:8px; margin-bottom:8px; overflow:hidden;'>";
			echo "<div style='font-size:10px;float:right;'>".getTime($tweet['timestamp'])."</div>";
			echo "<table>";
			echo "<tr>";
			echo "<td valign=top style='padding-top:4px;'>";
			echo "<img src='./default.jpg' style='width:35px;'alt='display picture'/>";
			echo "</td>";
			echo "<td style='padding-left:5px;word-wrap: break-word;' valign=top>";
			echo "<a style='font-size:12px;' href='./".$tweet['username']."'>@".$tweet['username']."</a>";
			$new_tweet = preg_replace('/@(\\w+)/','<a href=./$1>$0</a>',$tweet['tweet']);
			$new_tweet = preg_replace('/#(\\w+)/','<a href=./hashtag/$1>$0</a>',$new_tweet);
			echo "<div style='font-size:10px; margin-top:-3px;'>".$new_tweet."</div>";
			echo "</td>";
			echo "</tr>";
			echo "</table>";
			echo "</div>";
		}
		mysqli_close($link);
?>
