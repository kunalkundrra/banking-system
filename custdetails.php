<html>
<head>
<title>My Account - TSF Basic Bank System Project </title>
<link rel="stylesheet" href="styles.css">
</head>
<body bgcolor=skyblue>

<table align=center border=5 width=80% cellpadding=8 cellspacing=10>

<?php
include("connfile.php");
  session_start();
  $v1=$_SESSION['acno'];
  
  $sqlvar="select * from CustAcTab where acno=$v1";
  $result=$conn -> query($sqlvar);

  while($row=$result->fetch_row()) 
  {
		echo("<tr><td> A/c Number </td><td>".$row[0]." </td></tr><tr><td> Name </td><td>".$row[2]."</td></tr> <tr><td> Address </td><td>".$row[3]."</td></tr> <tr><td> Registered Mobile Number</td><td>".$row[4]."</td></tr> <tr><td> Registered Email Address</td><td>".$row[5]."</td></tr> <tr><td> A/c Type</td><td>".$row[6]."</td></tr>");
		
	}

?>
</table>
<h2><a href=custmainpage.php> Previous </a></h2>

<table width=100%>
    <tr height=200> <td> </td> </tr>
</table>

</body>
</html>