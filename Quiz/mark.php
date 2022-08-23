<html>
<head><title>Mark</title>
</head><body>
<marquee direction="down">Thank you for you attending your exam</marquee>
<!--<p><h1><a href="http://localhost/Quiz/summary.php">Users Mark Data</a></h1></p></body></html> -->
<?php
	$conn = new mysqli("localhost:3308","root","","quiz");
	if(!$conn){
		die("Failed : " . $Conn->connect_error);
	}
	
	$mark=$_GET['mark'];
	$check="select * from examuser;";
	$result = $conn->query($check);
	$row = $result->fetch_assoc();
	$query="insert into mark values('".$row['username']."','".$mark."');";
	$result = $conn->query($query);
	echo "<script>
			window.open('http://localhost/Quiz/summary.php', '_self')
			</script>
			";
	$conn -> close();
?>