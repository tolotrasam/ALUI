<?php
require '../connect.php';
   session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
// this vaue is a variable of the data collected in the demo-form
// $value1 = $_POST['username'];
 // echo  $input_id = mysqli_real_escape_string($conn,$_POST['user_id']);
     // echo $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
$value2 = $_POST['password'];
$value3 = $_POST['email'];
$value4 = $_POST['last_name'];
$value5 = $_POST['first_name'];
$value1 = substr($value3, 0, strrpos($value3, '@'));
echo $value1;
// sql to create table
$sql = "CREATE TABLE loginlist1 (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
first_name VARCHAR(30) NOT NULL,
last_name VARCHAR(30) NOT NULL,
email VARCHAR(30) NOT NULL,
username VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL,
gadget VARCHAR(80) NULL,
lastseen TIMESTAMP NULL,
profile_picture VARCHAR(100) NULL,
thumbnail VARCHAR(100) NULL,
theme VARCHAR(100) NULL

)";
if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
$sql = "SELECT * FROM loginlist1 WHERE email = '$value3' ";
 $result = mysqli_query($conn,$sql);
      $count = mysqli_num_rows($result);
   echo $value1;   
if($count == 1) { 
echo 'This email address is already used for an ALUi account. Please go back, check the spelling or click on recover password if you forgot your password';}
echo "<br>checkpoint one</br>";
// die;
if ($count == 0) {
//variable and insertion post method to table
$sql = "INSERT INTO loginlist1 (username,password, first_name,last_name,email,gadget ) VALUES ('$value1','$value2','$value5', '$value4', '$value3','php-static-component/\postvisual.php' )";
   echo $value1; 
// for mysqli error, we add conn between the brackets
if (mysqli_query($conn, $sql)) {
	 echo $value1;
echo '<br>after this<br>';	 
	echo $_SESSION['login_user'] = $value1;
    	header ("Location: ../index.php");
		echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);}
}
?>