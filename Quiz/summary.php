<html>
<head>
<title>Users Marks</title>
<style type="text/css">
table {
border-collapse:collapse;
width:100%;
color:#d96459;
font-family:monospace;
font-size:25px;
text-align:left;
}
th {
background-color:#d96459;
color:white;
}
h1{
	text-align:center;
	color:#d96459;
}
tr:nth-child(even) {background-color:#f2f2f2}
</style>
</head>
<body>
<p><h1><b>Participants</b></h1></p>
<table>
<tr>
<th>UserName</th>
<th>Marks</th>
</tr>
<?php
$conn = new mysqli("localhost:3308","root","","quiz");
	if(!$conn){
		die("Failed : " . $Conn->connect_error);
	}
$sql="select username,max(mark) from mark group by username;";
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
</table>

<?php include 'bargraph.htm';?>
<p><h1><a href="http://localhost/Quiz/rank.php">Toppers List</a></h1></p>
</body>
</html>
