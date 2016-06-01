<?php // function checkuser ($recipient){
if (empty($recipient )) {
	echo "no recipient assigned"; die;
};
if (isset($recipient)){ echo checkusername ($recipient);};
//function definition check if username exist in loginlist1
function checkusername($recipient){
	require '../connect.php';
echo "Connected successfully";

// echo "$recipient";
// checking by selection
  $sql="SELECT * FROM loginlist1 where username = '$recipient' and username != '$login_session'";

  $result = $conn->query($sql);
if ($result->num_rows > 0) {
    // check if the recipicient exist
    checkconversation ($recipient);
	    while($row = $result->fetch_assoc()) {
	$username = $row["username"];
		echo "<p>$username";
		checkconversation($recipient)}}
 else {
    echo " this person is not in the list, check the spelling";
}
$conn->close();
}
function checkconversation($recipient){
	
};
?>