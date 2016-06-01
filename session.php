<?php
   include('config.php');
   session_start();
 
   $user_check = $_SESSION['login_user'];
   // echo 'checkpoint 1 <br>';
   
   $ses_sql = mysqli_query($conn,"select * from loginlist1 where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
    $first_name = $row["first_name"];
       $last_name = $row["last_name"];
      $username = $row["username"];
      $theme = $row["theme"];
      $gadget = $row["gadget"];
	 $full_name = ''.$first_name.' '.$last_name.'';
	
	 $content = "'php-static-component/\postvisual.php'";
	  // echo $full_name;
 
 //user basic id
   $thumbnail = $row['thumbnail'];
   $profile_picture = $row['profile_picture'];
   $login_session = $row['username'];
   $name_session = $full_name;
   if(!isset($_SESSION['login_user'])){
      header("location:login.html");
   }
?>