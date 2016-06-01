<?php
   include("config.php");
   session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
   // echo '<br>checkpoint1<br>';
      
    echo  $input_id = mysqli_real_escape_string($conn,$_POST['user_id']);
     echo $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
         // echo '<br>checkpoint2
		 echo '<br>';
      
      $sql = "SELECT * FROM loginlist1 WHERE (username = '$input_id' and password = '$mypassword') or (email = '$input_id' and password = '$mypassword')";
      $result = mysqli_query($conn,$sql);
     echo  $count = mysqli_num_rows($result);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      echo $first_name = $row["first_name"];
      echo $last_name = $row["last_name"];
      echo $username = $row["username"];
      echo $email = $row["email"];
	 $full_name = ''.$first_name.' '.$last_name.'';
	  echo $full_name;
	  // echo $fullname = '.$first_name.''.$last_name.';
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
            // echo '<br>checkpoint10<br>';
      if($count == 1) {
            // echo '<br>checkpoint11<br>';
         // session_register("myusername");what does this mean????
   echo '<br>checkpoint35<br>';
        echo $_SESSION['login_user'] = $username;
		 

         header("location: index.php");
      }else {
       echo  $error = "Your Login Name or Password is invalid";
      }
   }
?>