<html>
<head>
<title>Registered Customers - TSF Basic Bank System Project </title>
<link rel="stylesheet" href="styles.css">
</head>
<body bgcolor=skyblue>

<table align=center border=2 width=85% cellpadding=7 cellspacing=7>
<tr><td><h3> A/cNo </h3> </td><td> <h3>Name</h3> </td><td> <h3>Address</h3> </td><td> <h3>MobileNo</h3></td><td> <h3>eMail</h3></td><td> <h3>A/c type</h3></td></tr>

<?php
include("connfile.php");

  $sqlvar="select * from CustAcTab where custapp='Y'";
  $result=$conn -> query($sqlvar);

  while($row=$result->fetch_row()) {
    echo("<tr><td>".$row[0]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6]."</td></tr>");
  }

?>
</table>
<h2><a href=adminmainpage.php> Previous </a></h2>

<table width=100%>
    <tr height=200> <td> </td> </tr>
</table>

</body>
</html>