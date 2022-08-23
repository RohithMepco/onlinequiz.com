<html>
<head>
<title>Users Marks</title>
<style type="text/css">
table {
	margin-left:auto;
	margin-right:auto;
border-collapse:collapse;
width:30%;
color:deepskyblue;
font-family:monospace;
font-size:25px;
text-align:center;
}
th {
background-color:deepskyblue;
color:white;
}
h1{
	text-align:center;
	color:deepskyblue;
}
h2{
		color:deepskyblue;
		font-size: 30px;
		text-align:center;
		border-radius: 50px;
		
margin-bottom:10px;  
background-color:white;
padding :8px; 
width :300px; 
height :70px; 
color:black;
border :10px solid red; 
-moz-border-radius :40px; 
-webkit-border-radius:40px; 
}
#myVideo {
  position: fixed;
  min-width: 100%;
  min-height: 20%;
}
.content {
  position: fixed;
  bottom: 0;
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
}

tr:nth-child(even) {background-color:#f2f2f2}
</style>
</head>
<body>
<video autoplay muted loop id="myVideo">
  <source src="finale.mp4"  type="video/mp4">
</video>
<div class="content">
<p><h1><b>Toppers</b></h1></p>
<table>
<tr>
<th>UserName</th>
<th>Marks</th>
</tr></div>
<?php
$conn = new mysqli("localhost:3308","root","","quiz");
	if(!$conn){
		die("Failed : " . $Conn->connect_error);
	}
$sql="  select username,max(mark) from mark group by username order by max(mark) desc limit 3;";
$result=$conn->query($sql);
if($result->num_rows>0)
{
	while($row=$result->fetch_assoc())
	{
		echo"<tr><td>".$row["username"]."</td><td>".$row["max(mark)"]."</td></tr>";
	}
	echo"</table>";
}
else{
echo "0 result";
}
?>