<?php

	$conn = new mysqli("localhost:3308","root","","quiz");
	if(!$conn){
		die("Failed : " . $Conn->connect_error);
	}
	
	//Check login :

	$username=$_POST['userName'];
	$pwd=$_POST['pwd'];
     
	$query="select * from user where username='".$username."' and password='".$pwd."';";
	$result = $conn->query($query);
	
	if($result->num_rows>0){
		$query="truncate table examuser;";
		$result = $conn->query($query);
		$query="insert into examuser values('".$username."');";
		$result = $conn->query($query);
		
		  echo"
		    <script>
			      console.log('Welcome');
				  window.location = 'quizoutline.htm';
			</script>
		  ";
      }
	else{
	      echo"
		  <script>
		  alert('Invalid username and password');
		  window.location = 'login.html';
		  </script>";
	   }
	$conn ->close();
	
?>