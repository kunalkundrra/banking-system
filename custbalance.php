<html>
<head>
<title>My Balance - TSF Basic Bank System Project </title>
<link rel="stylesheet" href="styles.css">
</head>
<body bgcolor=skyblue>

<table align=center border=3 width=70% cellpadding=8 cellspacing=10>
<tr><td colspan=2><h1> My Balance </h1></tr>

<?php
include("connfile.php");
  session_start();
  $v1=$_SESSION['acno'];
  
  $sqlvar="select  (sum(dbamt) - sum(cramt)) as Balance from TranTab where acno=$v1";
  $result=$conn -> query($sqlvar);

  while($row=$result->fetch_row()) 
  {
		echo("<tr><td> Balance Amount </td><td>".$row[0]." </td></tr>");
		
	}

?>
</table>
<h2><a href=custmainpage.php> Previous </a></h2>

<table width=100%>
    <tr height=200> <td> </td> </tr>
</table>

</body>
</html>