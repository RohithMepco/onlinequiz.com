<?php
	$conn = new mysqli("localhost:3308","root","","quiz");
	if(!$conn){
		die("Failed : " . $Conn->connect_error);
	}
	
	//Register:
	$username=$_POST['username'];
	$name=$_POST['name'];
	$pwd=$_POST['pwd'];
	$cpwd=$_POST['cpwd'];
    if($pwd==$cpwd)
	{		$check="select * from user where username='".$username."';";
	        $query="insert into user values('".$name."','".$username."','".$pwd."');";
	     $result = $conn->query($check);
		 if($result->num_rows>0){
			 echo"
		  <script>
 		alert('Username already exists!!');
		  window.location = 'signup.html';
			</script>
		";
		 }
		 else{
		  $result = $conn->query($query);
		echo"
		  <script>
 		alert('Successfully created');
		  window.location = 'login.html';
			</script>
		";
			}
	}
	
	else
	{
		echo"<script>alert('Password not same');
		 window.location = 'signup.html';
		 </script>";
	}
	$conn -> close();
?>