<?php
include "config.php";
		$tweets = mysqli_query($link,"SELECT name, timestamp, sumpcte, nrrev
							   FROM games
							   ORDER BY sumpcte/nrrev DESC
							   LIMIT 0, 10
							  ");
		while($tweet = mysqli_fetch_array($tweets)){
			echo "<div class='well well-sm' style='padding-top:4px;padding-bottom:8px; margin-bottom:8px; overflow:hidden;'>";
			echo "<table>";
			echo "<tr>";
			echo "<td style='padding-left:5px;word-wrap: break-word;' valign=top>";
			echo "<a style='font-size:12px;">"$tweet['name']"</a>";
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