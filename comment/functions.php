<?php
		  	// echo $check = "<br> checkpoint 0 you are connected to functions <br>";
//start of definition get_comments
	function get_comments($feed_code, $author) {
	  	// echo $check = "<br> checkpoint 1 inside get comment <br>";

		include 'database.php';
		  	// echo $check = '<br> checkpoint 2 after connection in function: the feed_code is '.$feed_code.'to db <br>';

//this print the number of comments parents and print the child down there
		$result = mysqli_query($conn, "SELECT * FROM `feedcomment` WHERE `feed_code`='$feed_code' AND `is_child`=FALSE ORDER BY `date` DESC");
		$row_cnt = mysqli_num_rows($result);

			new_comment($feed_code);
		echo '<div class="comment">';
		echo '<span class = "showcomment" code = "'.$feed_code.'" ><h4>Comments ('.$row_cnt.')</h4></span>';
		echo '<div class = "hide hider" id = "hider-'.$feed_code.'" >';

		foreach($result as $item) {
			//this format the date into letter
			$date = new dateTime($item['date']);
			$date = date_format($date, 'M j, Y | H:i:s');
			$auth = $item['author'];
			$par_code = $item['com_code'];
//this is a query to fetch the replies: child
			$chi_result = mysqli_query($conn, "SELECT * FROM `feedcomment` WHERE `par_code`='$par_code' AND `is_child`=TRUE");
			$chi_cnt = mysqli_num_rows($chi_result);
//this print the comment, author and date
			echo '<div class="comment" name="'.$par_code.'"><span class="author">'.$auth.'</span><br/>
			'.$item['comment'].'<br /><span class="date">Posted: '.$date.'</span><br />';
//this prints the number of reply
					if($chi_cnt == 0) {
						echo '<span class="replies">No replies</span><span class="replies">&emsp;Reply</span>';
						
							add_comment($item['author'], $item['com_code'],$feed_code);
					} else {
						echo '<span class="replies">[+] '.$chi_cnt.' replies</span>'
							.'<span class="replies"&emsp;Reply</span>';
							//this is the reply box , the form action is reply.php
							add_comment($item['author'], $item['com_code'],$feed_code);
							
						echo '<div name="children" id="children">';
						//this prints the replies 
						foreach($chi_result as $com) {
							$chi_date = new dateTime($com['date']);
							$chi_date = date_format($chi_date, 'M j, Y | H:i:s');

							echo '<div class="child" name="'.$com['com_code'].'">'
									.'<span class="author">'.$com['author'].'</span><br />'
									.$com['comment'].'<br />'
									.'<span class="date">Posted: '.$chi_date.'</span><br />'
								.'</div>';
							}
						echo '</div>';
					}
				echo '</div>';
			}
					echo '</div>';
					echo '</div>';
					echo '</div>';
			mysqli_close($connect);
		}
//end of function definition get_comments
//start of definition of function : add_comment=add new reply
	function add_comment($replier, $code, $feed_code) {
		echo '<form target = "targetframe" action="comment/reply.php" method="post" enctpye="" name="new_comment">'
		.'<div class = "cut-line"></div>'
				.'<input type="hidden" name="par_code" value="'.$code.'" />'
				.'<input type="hidden" name="feed_code" value="'.$feed_code.'" />'
				.'<textarea class="text_cmt form-control message" name="text_cmt" placeholder="Reply to '.$replier.'"></textarea><br />'
				.'<input type="submit" class = "btn btn-primary pull-right" value="Reply" />'
			.'</form>';
	}

	function new_comment($feed_code) {
		require ('../like/likecount.php');
		
		echo '<form target = "targetframe" action="comment/new.php?com_code='.$feed_code.'" method="post" enctpye="" name="new_comment" class = "comment">'.'<div class = ""></div>'
				.'<textarea class="text_cmt form-control message" id = "value-'.$feed_code.'"name="text_cmt" placeholder="Post a new comment"></textarea><br />'
				.'<input type="submit" class = "btn btn-primary pull-right comment-post" code = "'.$feed_code.'" value="Comment" />'
				.'<input type="button" class = "btn btn-primary pull-right like-post" code = "'.$feed_code.'" value="Like ('.$likecount.')" id = "like-'.$feed_code.'" like_number= "'.$likecount.'"/>'
			.'</form>';
	}

	//this is used by reply.php and new.php it generate a random string of 10 char for tagging a code name for each comment
	function generateRandomString($length = 10) {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$characterLength = strlen($characters);
		$randomString = '';

		for($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $characterLength - 1)];
		}
		return $randomString;
	}
	//this is used by reply.php and new.php
	function checkString($com_code) {
		include 'database.php';

		$rand = generateRandomString();
		$result = mysqli_query($connect, "SELECT * FROM `comments` WHERE `com_code`='$com_code'");
		$row_cnt = mysqli_num_rows($result);

		if($row_cnt != 0) {
			return $rand;
		} else {
			checkString($rand);
		}
	}
?>

