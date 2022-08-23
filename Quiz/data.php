<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET,POST,OPTIONS,DELETE,PUT');
header('Access-Control-Allow-Headers: Content-Type,X-Auth_Token, Origin, Authorization');
$conn = new mysqli("localhost:3308","root","","quiz");
	if(!$conn){
		die("Failed : " . $Conn->connect_error);
	}
$query=sprintf("select username,max(mark) as max_mark from mark group by username");
$result = $conn->query($query);

//loop through the returned data
$data = array();
foreach ($result as $row) {
  $data[] = $row;
}

//free memory associated with result
$result->close();

//close connection
$conn->close();

//now print the data
print json_encode($data);

?>