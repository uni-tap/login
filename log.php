<?php 
if (!isset($_POST['submit'])){
   ob_start();
   session_start();
  $my = md5(session_id());
    $mysqli = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($mysqli,"uni-tap");
	# check connection
	if ($mysqli->connect_errno) {
		echo "<p>MySQL error no {$mysqli->connect_errno} : {$mysqli->connect_error}</p>";
		exit();
	}
    // Function to get the client ip addres

// This will print user's real IP Address
// does't matter if user using proxy or not.

    
    //$ip = $_SERVER['REMOTE_ADDR'];
	$username = $_POST['username'];
	$password = $_POST['password'];
    $shown_pass = md5($password);
    $shown_name = md5($username);
    //$name = "SELECT first_name, last_name from users WHERE username LIKE '{$username}' AND password LIKE '{$password}' LIMIT 1";

	$sql = "SELECT * from users WHERE username LIKE '{$username}' AND password LIKE '{$password}' LIMIT 1";
	$result = $mysqli->query($sql);
	if (!$result->num_rows == 1) {
		echo "<script>window.location.replace('../../');</script>";
               }else {
                  echo "success";
                  $_SESSION['valid'] = true;
               $_SESSION['timeout'] = time();
               $_SESSION['username'] = $username;
               echo "<script>document.body.background.color = 'yellow';</script>";
               }
	}


?>